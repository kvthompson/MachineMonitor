<?php

namespace App\Http\Controllers;

use App\Fault;
use App\Http\Controllers\Controller;

class FaultController extends Controller
{
        public function getFault()
        {
                $faults = Fault::orderBy('created_at', 'ASC')->get();
                return view('faults', ['faults' => $faults]);
        }
	
	public function getCount()
	{
		$faultcount = Fault::count();
		return view('includes.header', ['faultcount' => $faultcount]);
	}
}
?>