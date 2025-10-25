<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $title = 'Trang Liên hệ';
        return view('clients.contact', compact('title'));
    }

    // Trong file App\Http\Controllers\clients\ContactController.php

public function store(Request $request)
{
    // 1. Validation: (Đã sửa từ bước trước, bỏ 'subject')
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'message' => 'required|string|max:1000',
    ]);

    $dataToInsert = [
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'message' => $validated['message'],
        'timestamp' => now(),
        
        // ✅ THÊM isRead VỚI GIÁ TRỊ MẶC ĐỊNH LÀ 0 (CHƯA ĐỌC)
        'isRead' => 0, 
    ];

    // 2. Xử lý userid (Điều kiện đăng nhập)
    if (auth()->check()) {
        // Tự động thêm userid của người dùng đang đăng nhập
        $dataToInsert['userid'] = auth()->id();
    } 
    // Nếu chưa đăng nhập, userid không được thêm vào mảng, 
    // và do cột userid cho phép NULL (theo bạn xác nhận) nên sẽ không gây lỗi.

    DB::table('tbl_contact')->insert($dataToInsert);

    // Trả về JSON thành công
    return response()->json(['success' => true]);
}

    public function destroy($id)
    {
        //
    }
}
