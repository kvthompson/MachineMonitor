<?php

namespace App\Http\Controllers;

use App\Machine;
use App\Http\Controllers\Controller;

class MachineController extends Controller
{
        public function getMachine()
        {
                $machines = Machine::all();
                return view('machines', ['machines' => $machines]);
        }

	public function machineJson() {
                $machines = Machine::all();
                return \Response::json($machines);
        }
}
?>