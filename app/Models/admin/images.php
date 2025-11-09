<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $table = 'tbl_images';
    protected $primaryKey = 'imageId';
    public $timestamps = false;

    protected $fillable = [
        'tourId',
        'imageURL',
        'description',
        'uploadDate',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tourId', 'tourId');
    }
}
