<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Blog;
use App\Models\clients\BlogComment;
use Carbon\Carbon;

class BlogDetailController extends Controller
{
    public function index($id)
    {
        // ✅ Lấy blog theo ID
        $blog = Blog::where('blogId', $id)->firstOrFail();

        // ✅ Lấy danh sách bình luận (kèm thông tin user)
        $comments = BlogComment::with('user')
            ->where('blogId', $id)
            ->orderByDesc('timestamp')
            ->get()
            ->map(function ($comment) {
                // Xử lý avatar URL (nếu user có avatar thì lấy, nếu không thì dùng default)
                $comment->avatar_url = !empty($comment->user?->avatar)
                    ? asset('clients/assets/img/account/' . $comment->user->avatar)
                    : asset('clients/assets/img/default-avatar.png');

                // Format thời gian
                $comment->time = Carbon::parse($comment->timestamp)->format('H:i d/m/Y');

                return $comment;
            });

        // ✅ Tiêu đề trang
        $title = $blog->title;

        // ✅ Trả về view cùng dữ liệu blog + comments
        return view('clients.blog-detail', compact('blog', 'title', 'comments'));
    }
}
