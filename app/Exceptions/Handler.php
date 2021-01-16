<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
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
     * Custom Error Handler, Return Json Message
     *
     * @param $request
     * @param Throwable $exception
     * @return JsonResponse|Response
     * @throws Throwable
     */
    public function render($request, Throwable $exception)
    {
        // Custom Error Just For Not Found Route Model Binding
        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['message' => 'همچین مسیری وجود ندارد!'], 404);
        }

        // Custom Error For Validations
        if ($exception instanceof ValidationException) {
            return response()->json([
                'message' => 'داده های داده شده نامعتبر است.',
                'errors' => $exception->errors(),
            ], 422);
        }

        // Custom Error For Database Error Message
        if ($exception instanceof QueryException) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }

        return parent::render($request, $exception);
    }
}
