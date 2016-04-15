<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () { 


	// untuk mengarhakan ke dalam controller registercontrooler dengan fungsi index
	Route::get('/register', ['uses' => 'RegisterController@index', 'as' => 'register.index']);
	//untuk mengarahkan ke dalam controller register dengan fungsi store
	Route::post('/register', ['uses' => 'RegisterController@store', 'as' => 'register.store']);

	// ini Router baru untuk template admin
	Route::get('/', ['uses' => 'ProfileController@index', 'as' => 'Profile.index']);

	Route::get('profil/{nama}', ['uses' => 'ProfileController@profil', 'as' => 'Profile.profil']);

	Route::get('formsederhana', ['uses' => 'ProfileController@formsederhana', 'as' => 'Profile.formsederhana']);

	Route::post('formsederhana', ['uses' => 'ProfileController@postformsederhana', 'as' => 'Profile.postformsederhana']);

	Route::get('crud', ['uses' => 'crudController@index', 'as' => 'crud.index']);

	Route::get('crud/create', ['uses' => 'crudController@create', 'as' => 'crud.create']);

	Route::put('crud/create', ['uses' => 'crudController@store', 'as' => 'crud.store']);

	Route::get('crud/edit/{id}', ['uses' => 'crudController@edit', 'as' => 'crud.edit']);

	Route::put('crud/update/{id}', array('as' => 'crud.update', 'uses' => 'crudController@update'));

	Route::get('crud/hapus/{id}', ['uses' => 'crudController@hapus', 'as' => 'crud.hapus']);

	//router yang terproteksi


	Route::get('login', ['uses' => 'UserController@getlogin', 'as' => 'User.getlogin']);

	Route::post('login', ['uses' => 'UserController@badeLogin', 'as' => 'badeLogin']);

	Route::get('logout', array('uses' => 'UserController@logout', 'as' => 'User.logout'));

});



// mendeklarasikan letak model pada App/Registrasi dengan nama registrasi.php
// use App\Registrasi;
// // mendeklarasikan variable input
// use Illuminate\Support\Facades\Input;
// use Illuminate\Http\Request;
// Route::post('/register', function()
// {
//     // 1. setting validasi
//     $rules = array(
//     	"email"                 => "required|email|unique:users,email",
//         "password"              => "required|min:6",
//         "password_confirmation" => "same:password",
//     	);

//     $comandor = Validator::make(Input::all(), $rules);

//     // 2a. jika semua validasi terpenuhi simpan ke database
//     if ($comandor->fails())
// 	{
// 	  	return Redirect::to("register")
//         ->withErorrs($comandor, 'register');

// 	}
//     // 2b. jika tidak, kembali ke halaman form registrasi
//     else
//     {
//         $game = new Registrasi;
//         $game->email    = Input::get('email');
//         $game->password = Hash::make(Input::get('password'));
//         $game->save();

//         return Redirect::to("register");
//     }
// });