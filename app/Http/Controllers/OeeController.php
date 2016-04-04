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


	public function getOee1()
        {
		$oees = Oee::all(); 
                return view('oee1', ['oees' => $oees]);
        }
	
	public function getOee2()
        {
                $oees = Oee::all();
                return view('oee2', ['oees' => $oees]);
        }

	public function getOee3()
        {
                $oees = Oee::all();
                return view('oee3', ['oees' => $oees]);
        }

	public function getOee4()
        {
                $oees = Oee::all();
                return view('oee4', ['oees' => $oees]);
        }

	public function oeeJson() {
                $oees = Oee::all();
                return \Response::json($oees);
        }
	
}
?>