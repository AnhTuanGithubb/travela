<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // 👈 thêm dòng này để dùng cho đăng nhập
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use HasFactory, Notifiable;

    // ✅ Tên bảng trong database
    protected $table = 'tbl_users';

    // ✅ Khóa chính
    protected $primaryKey = 'userid';

    // ✅ Bảng không có timestamps
    public $timestamps = false;

    // ✅ Các cột được phép gán hàng loạt
    protected $fillable = [
        'userName',
        'passWord',
        'email',
        'phoneNumber',
        'address',
        'ipAddress',
        'isActive',
        'status',
    ];

    // ✅ Laravel mặc định dùng cột "password" → ta cần chỉ rõ lại
    public function getAuthPassword()
    {
        return $this->passWord;
    }
}
