<?php 
// jangan lupa isi name space untuk router baru
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\InputStore;
use View;
use App\InputData;
use Redirect;
use DB;

//
class crudController extends Controller
{
	
	public function index()
	{
		$profiles = DB::table('profiles')->paginate(5);
		$profiles =
		[
			'profiles' => $profiles
		];
		return view('crud.index', $profiles);
	}

	public function create()
	{
		return View::make('crud.create');
	}

	public function store(InputStore $request)
	{

		$input = new InputData;
		$input->nama = $request->input('nama');
		$input->jeniskelamin = $request->input('jeniskelamin');
		$input->alamat = $request->input('alamat');
		$input->save();

		flash()->success('Berhasil menyimpan data.');
	            return redirect()->route('crud.index');
	}

	public function edit($id)
	{
		$profilesbyid = DB::table('profiles')->where('id',$id)->first();
		$profilesbyid =
		[
			'profilesbyid' => $profilesbyid
		];
		return view('crud.edit', $profilesbyid);
	}

	public function update($id, InputStore $request)
	{
		$input = InputData::find($id);
		$input->nama = $request->input('nama');
		$input->jeniskelamin = $request->input('jeniskelamin');
		$input->alamat = $request->input('alamat');
		$input->save();

		flash()->success('Edited Berhasil menyimpan data.');
	            return redirect()->route('crud.index');
	}

	public function hapus($id)
	{
		DB::table('profiles')->where('id', '=', $id)->delete();
		flash()->success('Data Berhasil Di Dobong.');
		return redirect()->route('crud.index');

	}
}