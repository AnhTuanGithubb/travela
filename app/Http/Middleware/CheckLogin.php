<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem có user trong session hay không
        if (!$request->session()->has('user')) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để đặt tour!');
        }

        return $next($request);
    }
}
