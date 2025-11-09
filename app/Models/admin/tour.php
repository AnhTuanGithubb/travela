<?php

namespace App\Models\Admin;

use App\Models\admin\Timeline;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'tbl_tour';

    // Khóa chính
    protected $primaryKey = 'tourId';

    // Không dùng timestamps
    public $timestamps = false;

    // Các cột có thể gán giá trị hàng loạt
    protected $fillable = [
        'title',
        'time',
        'description',
        'quantity',
        'priceAdult',
        'priceChild',
        'star',
        'destination',
        'availability',
        'domain',
        'startDate',
        'endDate',
        'reviews'
    ];

    /**
     * Quan hệ 1 tour có nhiều hình ảnh
     */
    

public function images()
{
    return $this->hasMany(images::class, 'tourId', 'tourId');
}

public function timelines()
{
    return $this->hasMany(Timeline::class, 'tourId', 'tourId');
}

public function reviews()
{
    return $this->hasMany(TourReview::class, 'tourId', 'tourId');
}
}