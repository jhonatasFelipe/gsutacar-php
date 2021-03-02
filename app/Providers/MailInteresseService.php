<?php

namespace App\Providers;

use App\Repositories\MailInteresseRepository;
use App\Repositories\VeiculosRepository;
use Illuminate\Support\ServiceProvider;

class MailInteresseService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $url = config('app.api-url');
        $MailInteresseRepo = new MailInteresseRepository($url,"envia_interesse");

        return $this->app->instance(MailInteresseRepository::class,$MailInteresseRepo);
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
