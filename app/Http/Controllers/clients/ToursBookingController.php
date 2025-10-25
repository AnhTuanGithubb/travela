<?php
namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToursBookingController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Tour Đã Đặt';

        // Kiểm tra session user
        $user = $request->session()->get('user');
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập trước.');
        }
        $userId = $user['id'];

        // Lấy danh sách booking kèm ảnh đầu tiên (sử dụng MIN và GROUP BY)
        $bookings = DB::table('tbl_booking')
            // JOIN đến tbl_tour
            ->join('tbl_tour', 'tbl_booking.tourId', '=', 'tbl_tour.tourId')
            // LEFT JOIN đến tbl_images (quan trọng: dùng LEFT JOIN để booking không bị mất nếu không có ảnh)
            ->leftJoin('tbl_images', 'tbl_tour.tourId', '=', 'tbl_images.tourId')
            ->select(
                'tbl_booking.bookingId as booking_id',
                'tbl_booking.bookingStatus',
                'tbl_booking.bookingDate',
                'tbl_booking.totalPrice',  // <--- ĐÃ THÊM: Tổng tiền booking
                'tbl_tour.title as tour_title',
                'tbl_tour.priceAdult',
                'tbl_tour.priceChild',     // <--- ĐÃ THÊM: Giá trẻ em
                'tbl_tour.star',
                // Dùng COALESCE để đảm bảo trả về chuỗi rỗng "" thay vì NULL nếu tour không có ảnh
                DB::raw('COALESCE(MIN(tbl_images.imageURL), "") as image') 
            )
            ->where('tbl_booking.userId', $userId)
            // GROUP BY tất cả các cột không dùng hàm tổng hợp
            ->groupBy(
                'tbl_booking.bookingId',
                'tbl_booking.bookingStatus',
                'tbl_booking.bookingDate',
                'tbl_booking.totalPrice',  // <--- ĐÃ THÊM VÀO GROUP BY
                'tbl_tour.title',
                'tbl_tour.priceAdult',
                'tbl_tour.priceChild',     // <--- ĐÃ THÊM VÀO GROUP BY
                'tbl_tour.star'
                // Tùy phiên bản MySQL, có thể cần thêm các cột non-aggregated khác
            )
            ->orderByDesc('tbl_booking.bookingId')
            ->get();

        return view('clients.toursbooking', compact('title', 'bookings'));
    }
}