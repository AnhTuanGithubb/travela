<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Home;
use App\Models\clients\Blog;

class HomeController extends Controller
{
    private $homeTours;
    public function __construct()
    {
        $this->homeTours = new Home();
    }
    public function index()
    {
        $title ='trang chủ';
        $tours = $this->homeTours->getHomeTours();
        //dd($tours);
        //return view('clients.home', data:compact(var_name:'title'));
        $blogs = Blog::orderBy('postdate', 'desc')
            ->take(4)
            ->get();

        return view('clients.home', compact('title', 'tours', 'blogs'));

    }

   
}
