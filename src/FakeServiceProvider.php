<?php

namespace Mjfavaro\Fake;

use Illuminate\Support\ServiceProvider;

class FakeServiceProvider extends ServiceProvider
{
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
		$this->app->singleton('fake', function() {
			return new \Mjfavaro\Fake\Fake;
		});
	}
}
