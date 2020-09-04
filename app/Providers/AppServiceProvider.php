<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {        
        $this->app->singleton(\App\JobIntro\JobIntro::class, function($app) {
            if(request('job') == 'Sales'){
                return new \App\JobIntro\Sales("/images/sales.jpg");
            }elseif(request('job') == 'Engineer'){
                return new \App\JobIntro\Engineer("/images/eng.jpg");
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('jobs',['Sales','Engineer','Doctor']);
        
        View::composer(['employee.create','employee.edit'], function($view) {
            $view->with('jobs',['Sales','Engineer','Doctor']);  
        });

        View::composer(['employee.create','employee.edit'], \App\Composers\OrganisationComposer::class);
    }
}
