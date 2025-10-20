<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $exception)
    {
        // Kiểm tra xem ngoại lệ có thực thi giao diện HttpExceptionInterface không.
        // Điều này đảm bảo phương thức getStatusCode() tồn tại và giải quyết lỗi cảnh báo.
        if ($exception instanceof HttpExceptionInterface) {
            
            // Kiểm tra lỗi 404 Not Found
            if ($exception->getStatusCode() == 404) {
                
                // Kiểm tra xem yêu cầu có phải là của khu vực 'admin' không
                if ($request->is('admin/*')) {
                    // Trả về view 404 riêng cho admin với status code 404
                    return response()->view('admin.errors.404', [], 404);
                } else {
                    // Trả về view 404 cho client/người dùng thông thường với status code 404
                    return response()->view('clients.errors.404', [], 404);
                }
            }
        }
        
        // Với các lỗi khác (không phải 404 hoặc không phải lỗi HTTP), chuyển về xử lý mặc định
        return parent::render($request, $exception);
    }
}