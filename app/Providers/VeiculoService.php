<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\VeiculosRepository;
use Illuminate\Support\Facades\Config;

class VeiculoService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $url = config('app.api-url');
        $veiculoRepo = new VeiculosRepository($url,"veiculo");

        $this->app->instance(VeiculosRepository::class,$veiculoRepo);
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
