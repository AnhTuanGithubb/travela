<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blogs;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * 🧾 Hiển thị danh sách blog
     */
    public function index()
    {
        $blogs = Blogs::orderBy('blogId', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * ➕ Hiển thị form thêm blog
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * 💾 Lưu blog mới
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'detailimage' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload ảnh chính
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_main.' . $request->image->extension();
            $request->image->move(public_path('clients/assets/img/blog'), $imageName);
        }

        // Upload ảnh chi tiết
        $detailImageName = null;
        if ($request->hasFile('detailimage')) {
            $detailImageName = time() . '_detail.' . $request->detailimage->extension();
            $request->detailimage->move(public_path('clients/assets/img/blog'), $detailImageName);
        }

        Blogs::create([
            'title'         => $request->title,
            'author'        => $request->author,
            'postdate'      => now(),
            'image'         => $imageName ?? '',
            'detailimage'   => $detailImageName ?? '',
            'commentsCount' => 0,
            'description'   => $request->description,
            // Lưu isActive dưới dạng boolean
            'isActive'      => $request->has('isActive'),
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Thêm blog mới thành công!');
    }

    /**
     * ✏️ Hiển thị form chỉnh sửa blog
     */
    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * 🔄 Cập nhật blog
     */
    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:100',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'detailimage' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'title'       => $request->title,
            'author'      => $request->author,
            'description' => $request->description,
            'isActive'    => $request->has('isActive'), // boolean
        ];

        // Cập nhật ảnh mới nếu có
        if ($request->hasFile('image')) {
            $imageName = time() . '_main.' . $request->image->extension();
            $request->image->move(public_path('clients/assets/img/blog'), $imageName);
            $data['image'] = $imageName;
        }

        if ($request->hasFile('detailimage')) {
            $detailImageName = time() . '_detail.' . $request->detailimage->extension();
            $request->detailimage->move(public_path('clients/assets/img/blog'), $detailImageName);
            $data['detailimage'] = $detailImageName;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')
                         ->with('success', 'Cập nhật blog thành công!');
    }

    /**
     * ❌ Xóa blog
     */
public function destroy($id)
{
    try {
        // Tìm blog
        $blog = DB::table('tbl_blogs')->where('blogId', $id)->first();

        if (!$blog) {
            return redirect()->route('admin.blogs.index')->with('error', 'Không tìm thấy bài viết.');
        }

        // 🔹 Xóa toàn bộ bình luận của blog này trước
        DB::table('tbl_blogcomment')->where('blogId', $id)->delete();

        // 🔹 Xóa ảnh cũ nếu có
        $imagePath = public_path('clients/assets/img/blog/' . $blog->image);
        $detailImagePath = public_path('clients/assets/img/blog/' . $blog->detailimage);

        if ($blog->image && file_exists($imagePath)) {
            unlink($imagePath);
        }
        if ($blog->detailimage && file_exists($detailImagePath)) {
            unlink($detailImagePath);
        }

        // 🔹 Cuối cùng mới xóa blog
        DB::table('tbl_blogs')->where('blogId', $id)->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Đã xóa bài viết cùng các bình luận thành công!');
    } catch (\Exception $e) {
        return redirect()->route('admin.blogs.index')->with('error', 'Lỗi khi xóa bài viết: ' . $e->getMessage());
    }
}



    /**
     * 👁️ Ẩn / Hiện blog
     */
    public function toggleStatus($id)
    {
        $blog = Blogs::findOrFail($id);
        // Toggle boolean trực tiếp nhờ $casts trong model
        $blog->update(['isActive' => !$blog->isActive]);
        return back()->with('success', 'Đã thay đổi trạng thái hiển thị của blog!');
    }
}
