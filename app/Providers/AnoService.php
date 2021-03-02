<?php

namespace App\Providers;

use App\Repositories\AnoRepository;
use Illuminate\Support\ServiceProvider;

class AnoService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $anorepository = new AnoRepository(config('app.api-url'),'ano');
        $this->app->instance(AnoRepository::class,$anorepository);
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
