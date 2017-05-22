<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class FormBuilderProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::addNamespace('theme', implode(DIRECTORY_SEPARATOR, [base_path(), 'app', 'FormBuilder', 'views']));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
