<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'tbl_booking';
    protected $primaryKey = 'bookingId';
    public $timestamps = false; // ❌ bảng không có created_at / updated_at

    protected $fillable = [
        'tourId',
        'userid',
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
        'bookingStatus'
    ];

    // Quan hệ với Tour
    public function tour()
    {
        return $this->belongsTo(\App\Models\Admin\Tour::class, 'tourId', 'tourId');
    }

    // Quan hệ với User (nếu có bảng users)
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'userid', 'id');
    }
}
