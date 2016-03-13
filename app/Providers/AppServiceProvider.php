<?php

namespace App\Providers;

use View;
use App\Fault;
use App\Oee;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	$faults = Fault::all();
	$oees = Oee::all();
        View::share(['counts' => $faults, 'oees' => $oees]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
