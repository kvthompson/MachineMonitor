<?php

namespace App\Http\Controllers;

use App\Fault;
use App\Http\Controllers\Controller;

class FaultController extends Controller
{
        public function getFault()
        {
                $faults = Fault::all();
                return view('faults', ['faults' => $faults]);
        }
}
?>