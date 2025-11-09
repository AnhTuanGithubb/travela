<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\BlogComment;
use Carbon\Carbon;

class BlogCommentsController extends Controller
{
    public function store(Request $request)
    {
        // 1. Lấy user từ session
        $user = $request->session()->get('user');
        $userId = $user['id'] ?? null;

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Bạn cần đăng nhập để bình luận.']);
        }

        // 2. Validate dữ liệu đầu vào
        $validated = $request->validate([
            'blogId'  => 'required|integer',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'comment' => 'required|string|max:1000',
        ]);

        // 3. Tạo comment mới
        $comment = BlogComment::create([
            'blogId'    => $validated['blogId'],
            'userId'    => $userId,
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'comment'   => $validated['comment'],
            'timestamp' => now(),
        ]);

        // 4. Lấy lại comment vừa tạo kèm thông tin user
        $comment = BlogComment::with('user')->find($comment->blogcommentId);

        // 5. Định dạng dữ liệu trả về
        return response()->json([
            'success' => true,
            'comment' => [
                'name' => $comment->name,
                'email' => $comment->email,
                'comment' => $comment->comment,
                'time' => Carbon::parse($comment->timestamp)->format('H:i d/m/Y'),
                'avatar' => asset(
                    'clients/assets/img/account/' . ($comment->user->avatar ?? 'default-avatar.png')
                ),
            ]
        ]);
    }
}
