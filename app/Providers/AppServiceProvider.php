<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\User\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

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
     * @note For Old Mysql Version, Use defaultStringLength
     * @note For Custom Model Token, Use usePersonalAccessTokenModel
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
