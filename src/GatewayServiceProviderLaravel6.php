<?php

namespace Larabookir\Gateway;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class GatewayServiceProviderLaravel6 extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $config = __DIR__ . '/../config/gateway.php';
        $migrations = __DIR__ . '/../migrations/';
        $views = __DIR__ . '/../views/';
        $seeders = __DIR__ . '/../seeders/';
        $Services = __DIR__ . '/../Services/';
        $Models = __DIR__ . '/../Models/';

        //php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=config
        $this->publishes([
            $config => config_path('gateway.php'),
        ], 'config')
        ;

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=migrations
        $this->publishes([
            $migrations => base_path('database/migrations')
        ], 'migrations');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=Models
        $this->publishes([
            $Models => base_path('app/Models')
        ], 'Models');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=seeders
        $this->publishes([
            $seeders => base_path('database/seeders')
        ], 'seeders');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=Services
        $this->publishes([
            $Services => base_path('app/Services')
        ], 'Services');

        $this->loadViewsFrom($views, 'gateway');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=views
        $this->publishes([
            $views => base_path('resources/views/vendor/gateway'),
        ], 'views');

        //$this->mergeConfigFrom( $config,'gateway')
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('gateway', function () {
			return new GatewayResolver();
		});

	}
}
