<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterStore;
use Hash;
use App\Registrasi;
use Redirect;
class registerController extends Controller
{

public function __construct()
{

}

public function index(){
return view('register');
}

public function store(RegisterStore $request){
	$user = new Registrasi;
	$user->email = $request->input('email');
	$user->password = Hash::make($request->input('email'));
	$user->save();

	flash()->success('Berhasil menyimpan data.');
            return redirect()->route('register.index');
}

}