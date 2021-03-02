<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\MarcaRepository;

class MarcaService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $marcaService = new MarcaRepository(config('app.api-url'),'marca');
       $this->app->instance(MarcaRepository::class,$marcaService);
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
