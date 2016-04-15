<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class UserController extends Controller
{
	
	public function getlogin()
	{
		return view('login');
	}

	public function badeLogin(Request $request)
	{
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			dd('sukses');
			return redirect()->route('Profile.index');
		}
		dd('gagal');
		return redirect()->back();

	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}