<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    // ✅ Khai báo tên bảng thật trong database
    protected $table = 'tbl_blogcomment';

    // ✅ Nếu khóa chính không phải 'id' (ví dụ: 'commentId')
    protected $primaryKey = 'blogcommentId';

    // ✅ Nếu bảng không có cột created_at và updated_at
    public $timestamps = false;

    // ✅ Cho phép gán dữ liệu hàng loạt
    protected $fillable = [
        'blogId',
        'userId',
        'name',
        'email',
        'comment',
        'timestamp'
    ];
     public function user()
    {
        return $this->belongsTo(\App\Models\clients\User::class, 'userid', 'userid');
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blogId', 'blogId');
    }
}
