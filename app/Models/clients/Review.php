<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'tbl_reviews';
    protected $primaryKey = 'reviewId';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'tourid',
        'userid',
        'name',
        'email',
        'rating',
        'comment',
        'timestamp'
    ];

    // ✅ Thêm quan hệ đến bảng người dùng
    public function user()
    {
        return $this->belongsTo(\App\Models\clients\User::class, 'userid', 'userid');
    }
}
