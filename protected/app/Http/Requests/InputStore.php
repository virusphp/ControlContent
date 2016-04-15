<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InputStore extends Request
{
	
	  public function authorize()
    {
        return 'pesanmu sedang di kirim';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nama"                 	=> "required|min:3",
            "jeniskelamin"          => "required",
            "alamat" 				=> "required"
        ];
    }
     public function messages()
    {
        return [
            'nama.required'                  	=> 'Nami Nipun Dereng Di isi',
            'nama.min'						  	=> 'Nami Nipun Kurang Saking 6',
            'jeniskelamin.required'           	=> 'Password Dereng Di isi',
            'alamat.required'      			 	=> 'Password kudu podo'
        ];
    }

}