<?php

namespace TypiCMS\Modules\Markup\Providers;

use TypiCMS\Modules\Markup\Http\Controllers\IndexController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    public function map(): void
    {
        Route::namespace('Markup')->prefix('markup')->group(function (Router $router) {
            $router->get('{page}', [IndexController::class, 'index'])->name('markup::index');
        });

    }
}