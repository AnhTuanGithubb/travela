<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Review;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Sử dụng Carbon cho việc định dạng thời gian

class ReviewsController extends Controller
{
    public function store(Request $request)
    {
        // 1. Lấy User ID từ Session (BƯỚC MỚI)
        $user = $request->session()->get('user');
        $userId = $user['id'] ?? null; // Lấy ID nếu có, nếu không có user thì gán là null

        // Kiểm tra xem người dùng có cần đăng nhập để đánh giá không (Tùy theo logic của bạn)
        // Nếu bạn muốn bắt buộc đăng nhập, hãy thêm kiểm tra sau:
        /*
        if (!$userId) {
             return response()->json(['success' => false, 'message' => 'Vui lòng đăng nhập để đánh giá.'], 401);
        }
        */

        // 2. Kiểm tra dữ liệu đầu vào
        $validated = $request->validate([
            'tourid' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'rating' => 'nullable|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // 3. Lưu dữ liệu vào CSDL (THÊM userId)
        $id = DB::table('tbl_reviews')->insertGetId([
            'tourid' => $validated['tourid'],
            'userId' => $userId, // <--- ĐÃ THÊM: Gán userId từ session
            'name' => $validated['name'],
            'email' => $validated['email'],
            'rating' => $validated['rating'] ?? 0,
            'comment' => $validated['comment'],
            'timestamp' => now(),
        ]);

        // 4. Lấy lại review vừa thêm và định dạng thời gian
        $review = DB::table('tbl_reviews')->where('reviewId', $id)->first();
        
        // Sử dụng Carbon để định dạng chính xác
        $review->time = Carbon::parse($review->timestamp)->format('H:i d/m/Y');

        // 5. Trả về JSON để AJAX xử lý
        return response()->json(['success' => true, 'review' => $review]);
    }
}