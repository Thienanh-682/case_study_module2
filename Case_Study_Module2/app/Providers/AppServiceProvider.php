<?php

namespace App\Providers;

use App\Http\Repositories\eloquent\StudentEloquentRepository;
use App\Http\Repositories\StudentRepositoryInterface;
use App\Http\Services\impl\StudentService;
use App\Http\Services\StudentServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StudentServiceInterface::class,StudentService::class);
        $this->app->singleton(StudentRepositoryInterface::class,StudentEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
