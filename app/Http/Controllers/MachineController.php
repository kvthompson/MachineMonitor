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
}
?>