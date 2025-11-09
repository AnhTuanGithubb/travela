<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use App\Models\clients\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TourDetailController extends Controller
{



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
        
        DB::table('tbl_tour')->where('tourId', $id)->increment('view');

        // ✅ Cách 1: dùng Eloquent + quan hệ user (gọn, đúng chuẩn)
        $reviews = \App\Models\clients\Review::with('user')
            ->where('tourid', $id)
            ->orderByDesc('timestamp')
            ->get()
            ->map(function ($review) {
                // Xử lý avatar URL
                $review->avatar_url = !empty($review->user?->avatar)
                    ? asset('clients/assets/img/account/' . $review->user->avatar)
                    : asset('clients/assets/img/default-avatar.png');

                // Format thời gian
                $review->time = \Carbon\Carbon::parse($review->timestamp)->format('H:i d/m/Y');

                return $review;
            });
        //  dd($reviews->toArray());

        return view('clients.tour-detail', compact('title', 'tourDetail', 'reviews'));
    }
}
