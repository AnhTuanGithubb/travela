<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Booking;

class BookingController extends Controller
{
    // Hiển thị danh sách booking
    public function index()
    {
        $bookings = Booking::with('tour')->orderBy('bookingDate', 'desc')->get(); // ✅ Booking hoa
        return view('admin.bookings.index', compact('bookings'));
    }

    // Form chỉnh sửa trạng thái
    // Form chỉnh sửa
public function edit($id)
{
    $booking = Booking::findOrFail($id);
    return view('admin.bookings.edit', compact('booking'));
}

// Cập nhật trạng thái
public function update(Request $request, $id)
{
    $booking = Booking::findOrFail($id);

    $request->validate([
        'bookingStatus' => 'required|in:Chưa duyệt,Đã duyệt,Đã hủy',
    ]);

    $booking->update([
        'bookingStatus' => $request->bookingStatus,
    ]);

    return redirect()->route('admin.bookings.index')->with('success', 'Cập nhật trạng thái đặt tour thành công!');
}


    // Xóa booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Xóa đặt tour thành công!');
    }
}
