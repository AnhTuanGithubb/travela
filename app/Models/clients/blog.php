<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // ✅ Đổi tên bảng đúng với database
    protected $table = 'tbl_blogs';

    // ✅ Khóa chính
    protected $primaryKey = 'blogId';

    // ✅ Không dùng timestamps
    public $timestamps = false;

    // ✅ Các cột có thể gán
    protected $fillable = [
        'title',
        'author',
        'postdate',
        'image',
        'commentsCount',
        'description',
        'detailimage',
        'isactive',
    ];
    public function comments()
    {
        // Nếu bảng là tbl_blogcomments, sửa đúng tên ở đây
        return $this->hasMany(BlogComment::class, 'blogId', 'blogId');
    }
}
