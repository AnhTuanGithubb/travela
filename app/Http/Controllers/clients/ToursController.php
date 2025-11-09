<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;


class ToursController extends Controller
{
    private $tours;

    public function __construct()
    {
        $this->tours = new Tours();
    }
    // public function index()
    // {
    //     $title = 'trang tour';
    //     $tours = $this->tours->getAllTours(1);
    //     $domain = $this->tours->getDomain();
    //     $mien_bac_count = optional($domain->firstWhere('domain', 'b'))->count;
    //     $domainsCount = [
    //         'mien_bac' => optional($domain->firstWhere('domain', 'b'))->count,
    //         'mien_trung' => optional($domain->firstWhere('domain', 't'))->count,
    //         'mien_nam' => optional($domain->firstWhere('domain', 'n'))->count,
    //     ];
    //     // dd($domain[0]);
    //     return view('clients.tours', compact('title', 'tours', 'domainsCount'));
    // }
    public function index(Request $request) // <-- Thêm $request
    {
        $title = 'trang tour';

        // 1. Lấy tham số sắp xếp từ URL, mặc định là 'default'
        // Ví dụ: ?sort_by=low_price
        $sortBy = $request->get('sort_by', 'default');

        // 2. Truyền tham số sắp xếp vào hàm để lấy danh sách tour
        // Giả sử tham số '1' là số trang hoặc một tham số lọc mặc định nào đó.
        $tours = $this->tours->getAllTours(4, $sortBy);

        // 3. Logic đếm domain (không thay đổi)
        $domain = $this->tours->getDomain();
        $domainsCount = [
            'mien_bac' => optional($domain->firstWhere('domain', 'b'))->count,
            'mien_trung' => optional($domain->firstWhere('domain', 't'))->count,
            'mien_nam' => optional($domain->firstWhere('domain', 'n'))->count,
        ];

        // 4. Trả về view
        // Chú ý: Cần đảm bảo view của bạn sử dụng đúng cách HTML/JS đã hướng dẫn trước đó
        return view('clients.tours', compact('title', 'tours', 'domainsCount'));
    }

    public function filterTours(Request $req)
    {
        $conditions = [];
        //dd($req->all());

        if ($req->filled('price')) {
            // Extract minimum and maximum price from the price string
            // $priceRange = explode(' - ', str_replace([' vnd', '.'], ['', ''], $req->price));
            $cleanPrice = str_replace(['vnd', 'VND', ' ', '.'], '', $req->price);
            $priceRange = explode('-', $cleanPrice);

            if (count($priceRange) == 2) {
                $minPrice = (int)$priceRange[0];
                $maxPrice = (int)$priceRange[1];

                $conditions[] = ['priceAdult', '>=', $minPrice];
                $conditions[] = ['priceAdult', '<=', $maxPrice];
            }
        }

        // Handle domain filter
        if ($req->filled('domain')) {
            $domain = $req->domain;
            $conditions[] = ['domain', '=', $domain];
        }
        if ($req->filled('star')) {
            $star = (int)$req->star;
            $conditions[] = ['star', '>=', $star];
        }

        // Handle duration filter
        if ($req->filled('time')) {
            $duration = $req->time;
            // Assuming you have a column called 'duration' to filter by
            $time = [
                '3n2d' => '3 ngày 2 đêm',
                '4n3d' => '4 ngày 3 đêm',
                '5n4d' => '5 ngày 4 đêm'
            ];
            $conditions[] = ['time', '=', $time[$duration]];
        }
        // dd($conditions);
        $filterTours = $this->tours->filterTours($conditions);

        // return response()->json($tours);
        return view(view: 'clients.partials.filter-tours', data: compact(var_name: 'filterTours'));
    }




    public function destroy($id)
    {
        //
    }
}
