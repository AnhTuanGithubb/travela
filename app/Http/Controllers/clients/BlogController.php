<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Blog; // ✅ thêm dòng này để dùng Model Blog

class BlogController extends Controller
{

    public function index()
    {
        $title = 'Trang Blog';

        // Lấy blog + đếm số bình luận tự động
        $blogs = Blog::withCount('comments')
            ->where('isactive', 1)
            ->orderBy('postdate', 'desc')
            
            ->paginate(6);

        return view('clients.blog', compact('title', 'blogs'));
    }
}
