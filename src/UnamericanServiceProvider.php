<?php

namespace Vool\Unamerican;

use Illuminate\Support\ServiceProvider;

class UnamericanServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Vool\Unamerican\Commands\Optimise',
    ];
     
     /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
