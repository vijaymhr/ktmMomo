<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Info;
use App\Feedback;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);


       // View::share('info', 'Test Address');
        View()->composer('*',function($view)
        {
            $infos= Info::all();
                $view->with('infos',$infos);
        });


        View()->composer('*',function($view)
        {
            $feedbacks= Feedback::all();
                $view->with('feedbacks',$feedbacks);
        });
        
    }
}
