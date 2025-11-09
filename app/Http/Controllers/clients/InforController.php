<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\infor;

class InforController extends Controller
{
    /**
     * Hiển thị trang thông tin tài khoản
     */
    public function index(Request $request)
    {
        $title = 'Thông tin tài khoản';
        $userSession = $request->session()->get('user'); // ✅ Lấy thông tin từ session

        if (!$userSession) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem thông tin.');
        }

        // Lấy dữ liệu đầy đủ từ database
        $user = infor::find($userSession['id']);

        if (!$user) {
            return redirect()->route('login')->with('error', 'Không tìm thấy tài khoản trong hệ thống.');
        }

        return view('clients.infor', compact('title', 'user'));
    }

    /**
     * Cập nhật thông tin tài khoản
     */
    public function update(Request $request)
    {
        $request->validate([
            'userName' => 'required|string|max:50',
            'email' => 'required|email',
            'phoneNumber' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $userSession = $request->session()->get('user');

        if (!$userSession) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để cập nhật thông tin.');
        }

        // Lấy người dùng thực tế trong DB
        $user = infor::find($userSession['id']);

        if (!$user) {
            return back()->with('error', 'Không tìm thấy tài khoản.');
        }

        // Cập nhật thông tin
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->address = $request->address;

        // Nếu có avatar mới
        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('clients/assets/img/account/'), $avatarName);
            $user->avatar = $avatarName;
        }

        $user->save();

        // Cập nhật lại session
        $request->session()->put('user', [
            'id' => $user->userid,
            'name' => $user->userName,
            'email' => $user->email,
        ]);

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }
}
