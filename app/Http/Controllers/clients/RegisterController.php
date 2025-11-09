<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Register;
use Illuminate\Support\Facades\Hash;

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
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // thêm dòng này
        ], [
            'userName.required' => 'Vui lòng nhập họ tên.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'avatar.image' => 'Avatar phải là định dạng ảnh.',
            'avatar.mimes' => 'Ảnh phải có định dạng jpg, jpeg, png.',
            'avatar.max' => 'Ảnh tối đa 2MB.',
        ]);

        // 🖼️ Xử lý avatar
        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('clients/assets/img/account/'), $avatarName);
        } else {
            $avatarName = '01.jpg'; // ảnh mặc định nếu người dùng không tải lên
        }

        // 🧾 Tạo user mới
        Register::create([
            'userName' => $request->userName,
            'email' => $request->email,
            'passWord' => Hash::make($request->password),
            'avatar' => $avatarName,
            'isActive' => 'y',
            'status' => 'a',
            'ipAddress' => $request->ip(),
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký tài khoản thành công! Vui lòng đăng nhập.');
    }
}
