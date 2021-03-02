<?php

namespace App\Providers;

use App\Repositories\AcessoriosRepository;
use Illuminate\Support\ServiceProvider;

class AcessoriosService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $acessoriosRepo = new AcessoriosRepository(config('app.api-url'),'acessorio');
        $this->app->instance(AcessoriosRepository::class,$acessoriosRepo);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
