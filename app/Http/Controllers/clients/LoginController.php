<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Hiển thị form đăng nhập
     */
    public function index()
    {
        $title = 'Trang Đăng Nhập';
        return view('clients.login', compact('title'));
    }

    /**
     * Xử lý đăng nhập
     */
    public function login(Request $request)
    {
        // 1️⃣ Validate dữ liệu
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        // 2️⃣ Tìm user theo email
        $user = Login::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Email không tồn tại trong hệ thống.',
            ])->onlyInput('email');
        }

        // 3️⃣ Kiểm tra mật khẩu (đã mã hóa trong DB)
        if (!Hash::check($request->password, $user->passWord)) {
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ])->onlyInput('email');
        }

        // 4️⃣ Kiểm tra trạng thái hoạt động
        if ($user->isActive === 'n') {
            return back()->withErrors([
                'email' => 'Tài khoản của bạn đã bị khóa hoặc chưa được kích hoạt. Vui lòng liên hệ quản trị viên.',
            ]);
        }

        // 5️⃣ Lưu thông tin đăng nhập vào session
        $request->session()->put('user', [
            'id' => $user->userid,
            'name' => $user->userName,
            'email' => $user->email,
        ]);

        return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
    }

    /**
     * Đăng xuất
     */
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Đăng xuất thành công!');
    }
}
