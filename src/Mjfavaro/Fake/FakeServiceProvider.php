<?php namespace Mjfavaro\Fake;

use Illuminate\Support\ServiceProvider;

class FakeServiceProvider extends ServiceProvider {

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
		$this->package('mjfavaro/fake');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
public function register()
{
    //echo 'Olá '.__CLASS__;
    $this->app->singleton('fake', function()
    {
        return new \Mjfavaro\Fake\Fake;
    });
}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
