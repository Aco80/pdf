<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
/*
      $this->app->bind(
        'app\Repositories\Base\BaseRepositories.php',
        'app\Repositories\User\UserRepositories.php'
        );
*/
    }
}
