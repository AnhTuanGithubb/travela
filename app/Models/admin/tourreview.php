<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    use HasFactory;

    // 🗂️ Tên bảng trong CSDL
    protected $table = 'tbl_reviews';

    // 🔑 Khóa chính
    protected $primaryKey = 'reviewId';

    // ⏱️ Nếu bảng có 2 cột created_at và updated_at
    public $timestamps = true;

    // ✅ Các cột được phép gán dữ liệu hàng loạt
    protected $fillable = [
        'tourId',
        'userId',
        'rating',
        'comment',
        //'created_at',
        //'updated_at',
    ];

    // 🔁 Một review thuộc về một tour
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tourId', 'tourId');
    }

    // 🔁 (Nếu có bảng users)
    public function user()
    {
        return $this->belongsTo(Users::class, 'userId', 'id');
    }
}
