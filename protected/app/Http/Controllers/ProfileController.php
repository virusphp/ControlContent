<?php 
// jangan lupa isi name space untuk router baru
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

//

class ProfileController extends Controller
{
	
	public function __construct()
	{
		# code...
	}

 	public function index()
        {
                    return View::make('home');
        }
 
    public function profil($nama)
    {
                $data =
                [
                    'nama' => $nama
                ];
                return View::make('profil',$data);
    }

    public function formsederhana()
    {
    	return View::make('formsederhana');
    }
    public function postformsederhana()
    {
    	$nama = Input::get('nama');
    	$jeniskelamin = Input::get('jeniskelamin');
    	$alamat = Input::get('alamat');

    	return 'Nama : '.$nama.' <br/>Jenis Kelamin : '.$jeniskelamin.'<br/>Alamat : '.$alamat; 
    }

	// public function profileview($nama)
 //    {
     
	//     $data =
	     
	//     [
		     
	// 	    // 'id' => $id, // Menyimpan nilai dari variable id ke dalam array
		     
	// 	    'nama' => $nama // Menyimpan nilai dari variable nama ke dalam array
	     
	//     ];
	     
	//     return View::make('profil',$data); // Parsing data ke dalam view lalu ditampilkan.
     
	// }
}
