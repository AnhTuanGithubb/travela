<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'tbl_users';
    protected $primaryKey = 'userid';
    public $timestamps = false;

    protected $fillable = [
        'userName',
        'avatar',
        'email',
        'passWord',
        'phoneNumber',
        'address',
        'isActive',
        'status'
    ];
}
