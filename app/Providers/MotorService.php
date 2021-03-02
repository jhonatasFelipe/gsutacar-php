<?php

namespace App\Providers;

use App\Repositories\MotorRepository;
use Illuminate\Support\ServiceProvider;

class MotorService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $motorRepository = new MotorRepository(config("app.api-url"),"motor");
        $this->app->instance(MotorRepository::class,$motorRepository);
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
