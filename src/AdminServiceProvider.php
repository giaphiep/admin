<?php

namespace GiapHiep\Admin;

use Illuminate\Support\ServiceProvider;
use GiapHiep\Admin\Middleware\RedirectIfAdminAuthenticated;
use GiapHiep\Admin\Middleware\AdminAuthenticate;
use GiapHiep\Admin\Commands\AdminInstall;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    	$package_name = "giaphiep";

    	//migrations
    	$this->loadMigrationsFrom(__DIR__.'/database/migrations/');
    	
    	$this->publishes([
	        __DIR__.'/database/migrations/' => database_path('migrations')
	    ], 'admin_migrations');


    	$this->publishes([
	        __DIR__.'/database/seeds' => database_path('seeds')
	    ], 'admin_seeds');

    	//view
    	
    	$this->loadViewsFrom(__DIR__.'/resources/views', $package_name);

	    $this->publishes([
	        __DIR__.'/resources/views' => resource_path('views/vendor/'. $package_name),
	    ], 'admin_views');

    	//assets
        $this->publishes([
        	__DIR__.'/public/assets' => public_path('vendor/assets'),
    	], 'admin_public');

        
        $this->app->register(RouteServiceProvider::class);

        //middleware
        $this->app['router']->aliasMiddleware('admin.guest', RedirectIfAdminAuthenticated::class);
        $this->app['router']->aliasMiddleware('admin.auth', AdminAuthenticate::class);


        //commands
        if ($this->app->runningInConsole()) {
	        $this->commands([
	            AdminInstall::class,
	        ]);
    	}
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}