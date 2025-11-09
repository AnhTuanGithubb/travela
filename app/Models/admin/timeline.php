<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'tbl_timeline';

    // Khóa chính
    protected $primaryKey = 'timeLineId';

    // Bỏ timestamps (vì bảng của bạn không có created_at, updated_at)
    public $timestamps = false;

    // Các cột có thể gán giá trị hàng loạt (mass assignable)
    protected $fillable = [
        'tourId',
        'title',
        'description',
    ];

    // Quan hệ: 1 timeline thuộc về 1 tour
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tourId', 'tourId');
    }
}
