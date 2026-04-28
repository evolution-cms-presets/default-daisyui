<?php

namespace EvolutionCMS\DefaultDaisyui;

use EvolutionCMS\ServiceProvider;

class DefaultDaisyuiServiceProvider extends ServiceProvider
{
    protected $namespace = 'default-daisyui';

    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'default-daisyui');
    }

    public function register(): void
    {
    }
}
