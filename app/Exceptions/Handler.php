<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
        $this->renderable(function (NotFoundHttpException $e) {
            //
            return response()->json(['message' => 'Object Not Found'], 404);
        });
        $this->renderable(function (AuthenticationException $e) {
            //
            // return response()->json(['message' => 'Unauthenticated or Token Expired'], 429);
            return Redirect::route('auth.login')->with('error', 'Unauthenticated or Token Expired');
        });
    }
}
