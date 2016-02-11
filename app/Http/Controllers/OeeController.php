<?php

namespace App\Http\Controllers;

use App\Oee;
use App\Http\Controllers\Controller;

class OeeController extends Controller
{
        public function getOee()
        {
		$oees = Oee::all();
		return view('oee', ['oees' => $oees]);
        }
}
?>