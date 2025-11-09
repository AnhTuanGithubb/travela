<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact';
    protected $primaryKey = 'contactId';
    public $timestamps = false; // ❌ bảng không có created_at / updated_at

    protected $fillable = [
        'contactId',
        'userid',
        'name',
        'email',
        'phone',
        'message',
        'isRead'
    ];


    // Quan hệ với User (nếu có bảng users)
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'userId', 'id');
    }
}
