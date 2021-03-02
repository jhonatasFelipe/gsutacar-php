<?php

namespace App\Providers;

use App\Repositories\ModeloRepository;
use Illuminate\Support\ServiceProvider;

class ModeloService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $modelo = new ModeloRepository(config('app.api-url'),'modelo');
        $this->app->instance(ModeloRepository::class,$modelo);
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
