<?php

namespace Appzcoder\LumenRoutesList;

use Appzcoder\LumenRoutesList\AppzcoderRoutesCommand;
use Illuminate\Support\ServiceProvider;

class AppzcoderRoutesCommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.routes.list', function () {
            return new AppzcoderRoutesCommand;
        });
        $this->commands(
            'command.routes.list'
        );
    }
}
