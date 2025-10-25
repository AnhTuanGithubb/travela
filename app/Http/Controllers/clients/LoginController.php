<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Login;

class LoginController extends Controller
{
    // Hiển thị form login
    public function index()
    {
        $title = 'Trang Đăng Nhập';
        return view('clients.login', compact('title'));
    }

    // Xử lý form login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        // Tìm user theo email
        $user = Login::where('email', $request->email)->first();

        // Nếu không tồn tại
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email không tồn tại trong hệ thống.',
            ])->onlyInput('email');
        }

        // So sánh mật khẩu trực tiếp (vì chưa mã hóa)
        if ($user->passWord !== $request->password) {
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ])->onlyInput('email');
        }

        // Kiểm tra trạng thái nếu có
        if ($user->isActive === 'n') {
            return back()->withErrors([
                'email' => 'Tài khoản của bạn chưa được kích hoạt.',
            ]);
        }

        // Lưu user vào session
        $request->session()->put('user', [
            'id' => $user->userid,
            'name' => $user->userName,
            'email' => $user->email,
        ]);

        return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Đăng xuất thành công!');
    }
}
