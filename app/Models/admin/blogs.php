<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'tbl_blogs';
    protected $primaryKey = 'blogId';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'author',
        'postdate',
        'image',
        'detailimage',
        'commentsCount',
        'description',
        'isActive',
    ];

    // ✨ Cast isActive thành boolean tự động
    protected $casts = [
        'isActive' => 'boolean',
    ];

    // ✨ Accessor: trả về text trạng thái
    public function getStatusTextAttribute()
    {
        return $this->isActive ? 'Hiển thị' : 'Ẩn';
    }

    // ✨ Accessor: trả về badge HTML
    public function getStatusBadgeAttribute()
    {
        return $this->isActive
            ? '<span class="badge bg-success">Hiển thị</span>'
            : '<span class="badge bg-secondary">Ẩn</span>';
    }
}
