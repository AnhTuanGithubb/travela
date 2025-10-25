<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Home extends Model
{
    use HasFactory;

    protected $table = 'tbl_tour';

    public function getHomeTours()
    {
        // Lấy thông tin tour
        $tours = DB::table(table: $this->table)
            ->get();

        foreach ($tours as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl')
                ->toArray();

            
            // $tour->timeline = DB::table('tbl_timeline')
            //     ->where('tourId',$tour->tourId)
            //     ->pluck('title');
        }

        return $tours;
    }
}
