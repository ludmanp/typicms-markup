<?php

namespace TypiCMS\Modules\Markup\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider  extends ServiceProvider
{
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    public function boot()
    {
        //
    }
}