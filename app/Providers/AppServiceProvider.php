<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;  
use Carbon\Carbon;    

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Paginator::bootstrap();
        Carbon::setLocale('id');
    }
}
