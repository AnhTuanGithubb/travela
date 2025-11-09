<?php

namespace App\Models\clients;

use Illuminate\Foundation\Auth\User as Authenticatable; // ⚙️ kế thừa từ Authenticatable để dùng Auth
use Illuminate\Notifications\Notifiable;

class infor extends Authenticatable
{
    use Notifiable;

    protected $table = 'tbl_users'; // bảng trong database
    protected $primaryKey = 'userid';
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    protected $fillable = [
        'userName',
        'email',
        'passWord',
        'phoneNumber',
        'address',
        'avatar',
        'ipAddress',
        'isActive',
        'status',
    ];
    /**
     * Cho phép Laravel Auth sử dụng cột passWord thay vì password
     */
    public function getAuthPassword()
    {
        return $this->passWord;
    }
}
