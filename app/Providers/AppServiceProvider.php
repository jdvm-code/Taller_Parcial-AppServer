<?php

namespace App\Providers;

use App\Http\Repository\PermisoRepository;
use App\Http\Repository\RolesRepository;
use App\Http\Repository\TareaRepository;
use App\Http\Repository\UserRepository;
use App\Http\Services\PermisoService;
use App\Http\Services\RolesService;
use App\Http\Services\TareaService;
use App\Http\Services\UserServices;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserServices::class,
            UserRepository::class
        );

        $this->app->bind(
            RolesService::class,
            RolesRepository::class
        );

        $this->app->bind(
            PermisoService::class,
            PermisoRepository::class
        );

        $this->app->bind(
            TareaService::class,
            TareaRepository::class
        );


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
