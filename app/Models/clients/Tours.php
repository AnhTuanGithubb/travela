<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tours extends Model
{
    use HasFactory;

    protected $table = 'tbl_tour';
    protected $primaryKey = 'tourId';

    public function filterTours($filters = [], $sorting = null, $perPage = null)
    {
        DB::enableQueryLog();

        $getTours = DB::table($this->table);

        if (!empty($filters)) {
            foreach ($filters as $filter) {
                // Mỗi $filter phải là mảng có 3 phần tử
                if (count($filter) === 3) {
                    $getTours = $getTours->where($filter[0], $filter[1], $filter[2]);
                }
            }
        }

        // Thực thi truy vấn
        $tours = $getTours->get();

        // Hiển thị log query
        //dd(DB::getQueryLog());
        foreach ($tours as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl')
                ->toArray();
        }
        return $tours; // dùng khi không cần debug
    }
 //all tuor có chưa phan trangGGGGGGGGGGGGGGGGGGG//

    // public function getAllTours()
    // {

    //     $allTours = DB::table($this->table)->get();
    //     foreach ($allTours as $tour) {
    //         // Lấy danh sách hình ảnh thuộc về tour
    //         $tour->images = DB::table('tbl_images')
    //             ->where('tourId', $tour->tourId)
    //             ->pluck('imageUrl')
    //             ->toArray();
    //     }

    //     return $allTours;
    // }
//all tuor có chưa phan trangGGGGGGGGGGGGGGGGGGG//


    //all tuor có phan trangGGGGGGGGGGGGGGGGGGG//
//     public function getAllTours($perPage = 1)
// {
//     // Lấy danh sách tour kèm ảnh và phân trang
//     $allTours = DB::table($this->table)
//         ->paginate($perPage);

//     // Gán ảnh cho từng tour
//     foreach ($allTours as $tour) {
//         $tour->images = DB::table('tbl_images')
//             ->where('tourId', $tour->tourId)
//             ->pluck('imageUrl')
//             ->toArray();
//     }

//     return $allTours;
// }
     //all tuor có phan trangGGGGGGGGGGGGGGGGGGG//

     //all tuor có  phan trangGGGGGGGGGGGGGGGGGGG + SAP XEPPPPPPPPP//
public function getAllTours($perPage = 4, $sortBy = 'default') // <-- Thêm tham số $sortBy
{
    // 1. Khởi tạo truy vấn cơ sở
    $query = DB::table($this->table); // Giả sử $this->table là tên bảng 'tour'

    // 2. Áp dụng logic sắp xếp dựa trên $sortBy
    switch ($sortBy) {
        case 'low_price':
            $query->orderBy('priceAdult', 'asc');
            break;

        case 'high_price':
            $query->orderBy('priceAdult', 'desc');
            break;
        
        case 'popular':
            // Sắp xếp theo Số sao (star) giảm dần
            $query->orderBy('star', 'desc')
                  ->orderBy('priceAdult', 'asc'); // Sắp xếp phụ
            break;

        case 'default':
        default:
            // Sắp xếp mặc định theo ID giảm dần (tour mới nhất)
            $query->orderBy('tourid', 'desc');
            break;
    }

    // 3. Phân trang và thực thi truy vấn
    $allTours = $query->paginate($perPage);

    // 4. Gán ảnh cho từng tour (Giữ nguyên logic của bạn)
    foreach ($allTours as $tour) {
        $tour->images = DB::table('tbl_images')
            ->where('tourId', $tour->tourId) // Đảm bảo đúng tên cột 'tourId'
            ->pluck('imageUrl')
            ->toArray();
    }

    return $allTours;
}
    //all tuor có  phan trangGGGGGGGGGGGGGGGGGGG + SAP XEPPPPPPPPP//

    
    public function getTourDetail($id)
    {
        $getTourDetail = DB::table($this->table)
            ->where('tourId', $id)
            ->first();

        if ($getTourDetail) {
            // Lấy danh sách hình ảnh thuộc về tour
            $getTourDetail->images = DB::table('tbl_images')
                ->where('tourId', $getTourDetail->tourId)
                ->limit(3)
                ->pluck('imageUrl')
                ->toArray(); // ⚠️ chuyển sang mảng để truy cập bằng [0], [1], [2]

            // Lấy danh sách timeline thuộc về tour
            $getTourDetail->timeline = DB::table('tbl_timeline')
                ->where('tourId', $getTourDetail->tourId)
                ->get();
        }

        return $getTourDetail;
    }



    public function getDomain()
    {
        return DB::table($this->table)
            ->select('domain', DB::raw('COUNT(*) as count'))
            ->whereIn('domain', ['b', 't', 'n'])
            ->groupBy('domain')
            ->get();
    }
}
