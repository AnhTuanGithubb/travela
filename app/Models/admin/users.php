<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'tbl_users';
    protected $primaryKey = 'userid';
    public $timestamps = false;

    protected $fillable = [
        'userName',
        'passWord',
        'email',
        'phoneNumber',
        'address',
        'ipAddress',
        'isActive',
        'status',
    ];
}
