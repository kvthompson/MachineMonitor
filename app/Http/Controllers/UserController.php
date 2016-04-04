<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	public function getDashboard()
	{
		return view('dashboard');
	}
	
	public function postRegister(Request $request)
	{
		$this->validate($request, [
					  'user_name' => 'required|max:120|unique:users',
					  'password' => 'required|min:4'
		]);
		
		$user_name = $request['user_name'];
		$password = bcrypt($request['password']);
		
		$user = new User();
		$user->user_name = $user_name;
		$user->password = $password;

		$user->save();
		
		Auth::login($user);

		return redirect()->route('dashboard');
	}

	public function postLogIn(Request $request)
	{
		  $this->validate($request, [
                                          'user_name' => 'required',
                                          'password' => 'required'
                ]);
		
		if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password']])) {
		   return redirect()->route('dashboard');
		}
		
		return redirect()->back();			
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('/');
	}

 	public function userJson() {
 	        $users = User::all();
	  	return \Response::json($users);
   	}

}

?>