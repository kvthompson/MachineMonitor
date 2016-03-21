<?php

namespace App\Providers;

use View;
use App\Fault;
use App\State;
use App\Month;
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
	$months = Month::all();
	$states = State::all();
        View::share(['counts' => $faults, 'states' => $states, 'months' => $months]);
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
