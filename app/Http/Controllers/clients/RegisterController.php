<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Register;

class RegisterController extends Controller
{
    /**
     * Hiển thị form đăng ký
     */
    public function index()
    {
        $title = 'Trang Đăng Ký';
        return view('clients.register', compact('title'));
    }

    /**
     * Xử lý form đăng ký
     */
    public function register(Request $request)
    {
        $request->validate([
            'userName' => 'required|string|max:50',
            'email' => 'required|email|unique:tbl_users,email',
            'password' => 'required|min:3|confirmed',
        ], [
            'userName.required' => 'Vui lòng nhập họ tên.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
        ]);

        // Tạo user mới
        Register::create([
            'userName' => $request->userName,
            'email' => $request->email,
            'passWord' => md5($request->password), // ⚙️ mã hóa bằng MD5
            'isActive' => 'y',
            'status' => 'a',
            'ipAddress' => $request->ip(),
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký tài khoản thành công! Vui lòng đăng nhập.');
    }
}
