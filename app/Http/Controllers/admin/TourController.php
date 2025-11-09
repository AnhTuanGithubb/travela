<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Tour;
use App\Models\Admin\images;
use App\Models\Admin\Timeline;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Hiển thị danh sách tour (kèm hình ảnh & timeline)
     */
    public function index()
    {
        $tours = Tour::with(['images', 'timelines'])->get();
        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Hiển thị form thêm mới tour
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Lưu tour mới vào DB
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'time' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'priceAdult' => 'nullable|numeric',
            'priceChild' => 'nullable|numeric',
            'destination' => 'nullable|string|max:255',
            'domain' => 'nullable|string|max:10',
            'star' => 'nullable|integer|min:1|max:5',
            'startDate' => 'nullable|date',
            'endDate' => 'nullable|date',
            'images' => 'required|array|min:3', // bắt buộc ít nhất 3 ảnh
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'timeline_title.*' => 'nullable|string|max:255',
            'timeline_description.*' => 'nullable|string',
        ], [
            'images.required' => 'Vui lòng chọn ít nhất 3 ảnh cho tour.',
            'images.min' => 'Tour cần có ít nhất 3 ảnh.',
        ]);

        DB::beginTransaction();

        try {
            // 🗺️ Chuẩn hóa giá trị domain enum
            $domainMap = [
                'Bắc' => 'b',
                'Trung' => 't',
                'Nam' => 'n'
            ];

            // 🟢 1. Lưu tour chính
            $tour = Tour::create([
                'title' => $request->title,
                'time' => $request->time,
                'description' => $request->description,
                'priceAdult' => $request->priceAdult,
                'priceChild' => $request->priceChild,
                'destination' => $request->destination,
                'domain' => $domainMap[$request->domain] ?? 'b',
                'startDate' => $request->startDate,
                'endDate' => $request->endDate,
                'quantity' => 0,
                'star' => $request->star ?? 5,
                'availability' => 1,
                'reviews' => null,
            ]);

            // 🖼️ 2. Lưu ảnh (ít nhất 3) — thêm description của tour vào từng ảnh
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('clients/assets/img/gallery-tour'), $fileName);

                    images::create([
                        'tourId' => $tour->tourId,
                        'imageURL' => $fileName,
                        'description' => $tour->description ?? '', // ✅ auto copy từ tour
                    ]);
                }
            }

            // ⏰ 3. Lưu timeline
            if ($request->timeline_title && is_array($request->timeline_title)) {
                foreach ($request->timeline_title as $i => $title) {
                    if (!empty($title)) {
                        Timeline::create([
                            'tourId' => $tour->tourId,
                            'title' => $title,
                            'description' => $request->timeline_description[$i] ?? '',
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.tours.index')->with('success', 'Thêm tour thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Lỗi khi thêm tour: ' . $e->getMessage());
        }
    }


    /**
     * Hiển thị form chỉnh sửa tour
     */
    public function edit($id)
    {
        $tour = Tour::with(['images', 'timelines'])->findOrFail($id);
        return view('admin.tours.edit', compact('tour'));
    }
    public function deleteImage($id)
    {
        try {
            $image = Images::findOrFail($id);

            // Xóa file thật
            $filePath = public_path('clients/assets/img/gallery-tour/' . $image->imageURL);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            // Xóa DB
            $image->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    /**
     * Cập nhật tour (và có thể thêm ảnh/timeline mới)
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'time' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'priceAdult' => 'nullable|numeric',
            'priceChild' => 'nullable|numeric',
            'destination' => 'required|string|max:255',
            'domain' => 'required|in:b,t,n',
            'startDate' => 'nullable|date',
            'endDate' => 'nullable|date',
            'star' => 'required|integer|min:1|max:5',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'timeline_title.*' => 'nullable|string|max:255',
            'timeline_description.*' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $tour = Tour::findOrFail($id);

            // 🟢 1. Cập nhật tour chính
            $tour->update([
                'title' => $request->title,
                'time' => $request->time,
                'description' => $request->description,
                'priceAdult' => $request->priceAdult,
                'priceChild' => $request->priceChild,
                'destination' => $request->destination,
                'domain' => $request->domain,
                'startDate' => $request->startDate,
                'endDate' => $request->endDate,
                'star' => $request->star,
            ]);

            // 🟢 2. Thêm ảnh mới (nếu có upload thêm)
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('clients/assets/img/gallery-tour'), $fileName);

                    Images::create([
                        'tourId' => $tour->tourId,
                        'imageURL' => $fileName,
                        'description' => $tour->description,
                    ]);
                }
            }

            // 🟢 3. Cập nhật timeline (xóa cũ - thêm mới)
            Timeline::where('tourId', $tour->tourId)->delete();
            if ($request->timeline_title && is_array($request->timeline_title)) {
                foreach ($request->timeline_title as $i => $title) {
                    if (!empty($title)) {
                        Timeline::create([
                            'tourId' => $tour->tourId,
                            'title' => $title,
                            'description' => $request->timeline_description[$i] ?? '',
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.tours.index')->with('success', 'Cập nhật tour thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Lỗi khi cập nhật tour: ' . $e->getMessage());
        }
    }

    /**
     * Xóa tour (và ảnh + timeline liên quan)
     */
    public function destroy($id)
{
    DB::beginTransaction();

    try {
        $tour = Tour::findOrFail($id);

        // 🔹 Xóa ảnh vật lý (nếu có)
        if ($tour->images && count($tour->images) > 0) {
            foreach ($tour->images as $img) {
                $path = public_path('clients/assets/img/gallery-tour/' . $img->imageURL);
                if ($img->imageURL && file_exists($path)) {
                    unlink($path);
                }
            }
        }

        // 🔹 Xóa các bản ghi liên quan trong DB
        $tour->images()->delete();      // bảng tbl_images
        $tour->timelines()->delete();   // bảng tbl_timelines
        $tour->reviews()->delete();     // bảng tbl_reviews

        // 🔹 Cuối cùng xóa tour
        $tour->delete();

        DB::commit();

        return redirect()
            ->route('admin.tours.index')
            ->with('success', 'Xóa tour và các dữ liệu liên quan thành công!');
    } catch (\Exception $e) {
        DB::rollBack();

        return back()->with('error', 'Lỗi khi xóa tour: ' . $e->getMessage());
    }
}

}
