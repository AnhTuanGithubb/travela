<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Tên bảng thực tế
    protected $table = 'tbl_booking';
    protected $primaryKey = 'bookingId';
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    protected $fillable = [
        'tourId',
        'userId',
        'name',
        'email',
        'phone',
        'time',
        'address',
        'bookingDate',
        'numAdults',
        'numChildren',
        'message',
        'totalPrice',
        'bookingStatus',
        'specialRequests' // ⚠️ chú ý: bạn viết sai chính tả trước đó là `specialRequestes`
    ];

    // Quan hệ nếu cần (ví dụ với bảng tour)
    public function tour()
    {
        return $this->belongsTo(Tours::class, 'tourId', 'tourId');
    }

  
}
