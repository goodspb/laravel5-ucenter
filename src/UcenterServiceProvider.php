<?php namespace Goodspb\Laravel5Ucenter;

use Illuminate\Support\ServiceProvider;

/**
 * Class UcenterServiceProvider
 * @package Goodspb\Laravel5Ucenter
 */
class UcenterServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/config/ucenter.php' => config_path('ucenter.php'),
		]);
		$this->mergeConfigFrom(__DIR__.'/config/ucenter.php', 'ucenter');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Ucenter', function ($app) {
			return new Ucenter();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
