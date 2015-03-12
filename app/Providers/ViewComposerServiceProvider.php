<?php namespace App\Providers;

use App\Menu;
use Illuminate\Support\ServiceProvider;
use Request;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
    public $banners;
	public function boot()
	{
        $this->composeBanner();
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

    public function composeBanner()
    {
        if (Menu::whereSlug(Request::path())->count())
        {
            $banners = Menu::whereSlug(Request::path())->first()->banner;
        } else
        {
            $banners = false;
        }
        $this->banners=$banners;
        view()->composer('layouts.partials.flexslider', function ($view)
        {
            $view->with('banners', $this->banners);
        });
    }

}
