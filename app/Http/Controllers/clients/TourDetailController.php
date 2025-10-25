<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use App\Models\clients\Review;

class TourDetailController extends Controller
{

    ////////TOURDETAILCONTRLLERR TRƯỚC KHI LÀM ĐẶT TUOR 

   // private $tours;

    //public function __construct()
    //{
    //    $this->tours = new Tours();
  //  }
   // public function index($id = 0)
   // {
        // Lấy thông tin tour
        // $title = 'Chi tiết tour ' . $id;
        // $tourDetail = $this->tours->getTourDetail($id);

        // Nếu tour không tồn tại
        // if (!$tourDetail) {
        //     abort(404, 'Tour không tồn tại');
        // }

        // ✅ Lấy danh sách review của tour này (theo tourid)
        // $reviews = Review::where('tourid', $id)
        //     ->orderByDesc('timestamp')
        //     ->get();

        // Truyền dữ liệu sang view
        // return view('clients.tour-detail', compact('title', 'tourDetail', 'reviews'));
       // return view('clients.tour-detail', compact('title', 'tourDetail', 'reviews'));

  //  }

  ////////TOURDETAILCONTRLLERR TRƯỚC KHI LÀM ĐẶT TUOR 

  
   private $tours;

    public function __construct()
    {
        $this->tours = new Tours();
    }

    public function index($id)
    {
        $title = 'Chi tiết tour ' . $id;
        $tourDetail = $this->tours->getTourDetail($id);

        if (!$tourDetail) {
            abort(404, 'Tour không tồn tại');
        }

        $reviews = Review::where('tourid', $id)
            ->orderByDesc('timestamp')
            ->get();

        return view('clients.tour-detail', compact('title', 'tourDetail', 'reviews'));
    }

   
}
