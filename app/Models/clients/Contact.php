<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact'; // nếu tên bảng không phải "contacts"
    protected $primaryKey = 'contactId'; // hoặc 'contactid' nếu bạn đặt vậy
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'timestamp',
    ];
}
