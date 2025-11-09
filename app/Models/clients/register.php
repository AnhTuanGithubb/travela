<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'tbl_users';

    // Khóa chính
    protected $primaryKey = 'userid';

    // Tắt timestamps (vì bảng không có created_at và updated_at)
    public $timestamps = false;

    // Các cột có thể gán hàng loạt
    protected $fillable = [
        'userName',
        'passWord',
        'email',
        'phoneNumber',
        'address',
        'ipAddress',
        'isActive',
          'avatar',
    ];
}
