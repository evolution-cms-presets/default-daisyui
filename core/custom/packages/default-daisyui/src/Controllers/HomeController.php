<?php

namespace EvolutionCMS\DefaultDaisyui\Controllers;

class HomeController extends BaseController
{
    public function render(): void
    {
        $this->data['preset'] = [
            'name' => 'default-daisyui',
            'theme' => '/themes/default-daisyui',
        ];
    }
}
