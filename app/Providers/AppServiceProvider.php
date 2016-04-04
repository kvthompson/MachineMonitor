<?php

namespace App\Providers;

use View;
use App\Attendfault;
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
	$faults = Attendfault::where('attended', '=', 'No')->get();
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
