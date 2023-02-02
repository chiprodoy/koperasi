<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::componentNamespace('App\\View\\Components\\Viho', 'viho');
        Paginator::useBootstrapFive();
        Response::macro('success', function ($message, $data) {
            return response()->json(
                [
                    'status' => 'Success',
                    'response_code' => 200,
                    'message' => $message,
                    'data' => $data,
                ],
                200
            );
        });

        Response::macro('error', function ($message, $data) {
            return response()->json(
                [
                    'status' => 'Error',
                    'response_code' => 422,
                    'message' => $message,
                    'data' => $data,
                ],
                422
            );
        });

        Response::macro('validation', function ($message) {
            return response()->json(
                [
                    'status' => 'Error',
                    'response_code' => 422,
                    'message' => $message,
                ],
                422
            );
        });

        Response::macro('mapping', function ($message) {
            return response()->json(
                [
                    'status' => 'Success',
                    'response_code' => 200,
                    'message' => $message,
                ],
                200
            );
        });

        Response::macro('forbidden', function ($message) {
            return response()->json(
                [
                    'status' => 'Forbidden',
                    'response_code' => 403,
                    'message' => $message,
                ],
                403
            );
        });

        Response::macro('notfound', function () {
            return response()->json(
                [
                    'status' => 'Not Found',
                    'response_code' => 404,
                    'message' => 'Not Found',
                ],
                404
            );
        });
    }
}