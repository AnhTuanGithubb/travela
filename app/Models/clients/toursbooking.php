<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToursBooking extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'tbl_booking';

    // Khóa chính
    protected $primaryKey = 'id';

    // Các cột cho phép gán hàng loạt (mass assignment)
    protected $fillable = [
        'user_id',
        'tour_id',
        'status',
        'message',
        'created_at',
        'updated_at'
    ];

    // Nếu bảng có timestamps (created_at, updated_at) thì giữ true
    public $timestamps = true;

    // Quan hệ với bảng tour
    public function tour()
    {
        return $this->belongsTo(Tours::class, 'tour_id', 'id');
    }

    // Quan hệ với bảng user (nếu có model User riêng)
    public function user()
    {
        return $this->belongsTo(Login::class, 'user_id', 'userid');
    }
}
