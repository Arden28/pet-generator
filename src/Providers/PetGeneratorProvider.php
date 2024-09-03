<?php

namespace Arden28\PetGenerator\Providers;

use Illuminate\Support\ServiceProvider;

class PetGeneratorProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'pet-generator');
    }
}
