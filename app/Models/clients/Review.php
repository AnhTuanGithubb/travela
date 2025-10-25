<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    

    protected $table = 'tbl_reviews';
    protected $primaryKey = 'reviewId'; // ⚠️ thay bằng tên cột khóa chính thật trong bảng của bạn
    public $incrementing = true; // nếu khóa chính là AUTO_INCREMENT
    protected $keyType = 'int';
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    protected $fillable = [
        'tourid',
        'name',
        'email',
        'rating',
        'comment',
        'timestamp'
    ];
}
