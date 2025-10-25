<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Tours;
use App\Models\clients\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Hiển thị form booking
     */
    public function create($id)
    {
        $title = 'Đặt Tour Du Lịch';

        // Lấy thông tin tour
        $tour = Tours::where('tourId', $id)->first();

        if (!$tour) {
            abort(404, 'Tour không tồn tại');
        }

        return view('clients.booking', compact('title', 'tour'));
    }
    
    /**
     * Lưu thông tin booking vào DB (dành cho AJAX + toastr)
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:150',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:30',
            'address'     => 'nullable|string|max:255',
            'numAdults'   => 'nullable|integer|min:0',
            'numChildren' => 'nullable|integer|min:0',
            'message'     => 'nullable|string|max:255',
            'tourId'      => 'required|integer|exists:tbl_tour,tourId',
        ]);

        // Nếu cả 2 đều null hoặc = 0 → lỗi
        $numAdults = $request->numAdults ?? 0;
        $numChildren = $request->numChildren ?? 0;

        if ($numAdults == 0 && $numChildren == 0) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng nhập số người lớn hoặc trẻ em trước khi đặt tour!'
            ], 422);
        }

        // ✅ Lấy userId từ session (vì bạn lưu user khi đăng nhập ở session chứ không dùng Auth)
        $user = $request->session()->get('user');
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Bạn cần đăng nhập trước khi đặt tour!'
            ], 401);
        }
        $userId = $user['id'];

        // ✅ Lấy thông tin tour
        $tour = Tours::where('tourId', $request->tourId)->first();

        $time = $tour->startDate . ' - ' . $tour->endDate;
        $totalPrice = ($tour->priceAdult * $numAdults) + ($tour->priceChild * $numChildren);

        // ✅ Lưu vào bảng booking
        Booking::create([
            'tourId'        => $tour->tourId,
            'userId'        => $userId,
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'time'          => $time,
            'address'       => $request->address,
            'numAdults'     => $numAdults,
            'numChildren'   => $numChildren,
            'message'       => $request->message,
            'bookingDate'   => Carbon::now(),
            'bookingStatus' => 'Pending',
            'totalPrice'    => $totalPrice,
        ]);

        return response()->json([
            'success' => true,
            'message' => '🎉 Đặt tour thành công! Cảm ơn bạn đã lựa chọn dịch vụ của chúng tôi.'
        ]);
    }

    /**
     * Trang thông báo sau khi đặt thành công (tuỳ chọn)
     */
    public function success()
    {
        $title = 'Đặt tour thành công';
        return view('clients.booking-success', compact('title'));
    }
}
