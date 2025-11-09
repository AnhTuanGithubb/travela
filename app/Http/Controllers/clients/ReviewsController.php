<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Review;
use Carbon\Carbon;

class ReviewsController extends Controller
{
    public function store(Request $request)
    {
        // 1. Lấy user từ session
        $user = $request->session()->get('user');
        $userId = $user['id'] ?? null;

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Bạn cần đăng nhập để đánh giá.']);
        }

        // 2. Validate dữ liệu đầu vào
        $validated = $request->validate([
            'tourid'  => 'required|integer',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'rating'  => 'nullable|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // 3. Tạo review mới
        $review = Review::create([
            'tourid'    => $validated['tourid'],
            'userid'    => $userId,
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'rating'    => $validated['rating'] ?? 0,
            'comment'   => $validated['comment'],
            'timestamp' => now(),
        ]);

        // 4. Lấy lại review vừa tạo kèm thông tin user
        $review = Review::with('user')->find($review->reviewId);

        // 5. Định dạng dữ liệu trả về
        return response()->json([
            'success' => true,
            'review' => [
                'name' => $review->name,
                'email' => $review->email,
                'comment' => $review->comment,
                'rating' => $review->rating,
                'time' => Carbon::parse($review->timestamp)->format('H:i d/m/Y'),
                'avatar' => asset(
                    'clients/assets/img/account/' . ($review->user->avatar ?? 'default-avatar.png')
                ),
            ]
        ]);
    }
}
