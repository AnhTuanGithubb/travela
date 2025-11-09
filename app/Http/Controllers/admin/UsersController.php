<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /** 🧾 Hiển thị danh sách người dùng */
    public function index()
    {
        $users = Users::orderBy('userid', 'desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /** ➕ Hiển thị form thêm người dùng */
    public function create()
    {
        return view('admin.users.create');
    }

    /** 💾 Lưu người dùng mới */
    public function store(Request $request)
    {
        $request->validate([
            'userName'    => 'required|string|max:50|unique:tbl_users,userName',
            'email'       => 'required|email|max:255|unique:tbl_users,email',
            'passWord'    => 'required|string|min:6|confirmed',
            'phoneNumber' => 'nullable|string|max:15',
            'address'     => 'nullable|string|max:255',
            'isActive'    => ['required', Rule::in(['y', 'n'])],
        ]);

        Users::create([
            'userName'    => $request->userName,
            'email'       => $request->email,
            'passWord'    => Hash::make($request->passWord),
            'phoneNumber' => $request->phoneNumber,
            'address'     => $request->address,
            'ipAddress'   => $request->ip(),
            'isActive'    => $request->isActive,
        ]);

        return redirect()->route('admin.users.index')
                         ->with('success', 'Thêm người dùng mới thành công!');
    }

    /** ✏️ Hiển thị form chỉnh sửa người dùng */
    public function edit($id)
    {
        $user = Users::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /** 🔄 Cập nhật thông tin người dùng */
    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        $request->validate([
            'userName'    => 'required|string|max:50|unique:tbl_users,userName,' . $id . ',userid',
            'email'       => 'required|email|max:255|unique:tbl_users,email,' . $id . ',userid',
            'passWord'    => 'nullable|string|min:6|confirmed',
            'phoneNumber' => 'nullable|string|max:15',
            'address'     => 'nullable|string|max:255',
            'isActive'    => ['required', Rule::in(['y', 'n'])],
        ]);

        $data = $request->only(['userName', 'email', 'phoneNumber', 'address', 'isActive']);

        if ($request->filled('passWord')) {
            $data['passWord'] = Hash::make($request->passWord);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')
                         ->with('success', 'Cập nhật người dùng thành công!');
    }

    /** 🗑️ Xóa tài khoản người dùng khỏi hệ thống (DELETE vĩnh viễn) */
    public function destroy($id)
    {
        $user = Users::findOrFail($id);

        // Lưu tên để hiển thị thông báo trước khi xóa
        $userName = $user->userName;

        // Xóa bản ghi vĩnh viễn
        $user->delete();

        return redirect()->route('admin.users.index')
                         ->with('success', 'Đã xóa tài khoản "' . $userName . '" khỏi hệ thống.');
    }
}
