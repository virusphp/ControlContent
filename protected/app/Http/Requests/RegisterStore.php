<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterStore extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            "email"                 => "required|email|unique:users,email",
            "password"              => "required|alphaNum|min:6",
            "password_confirmation" => "required|same:password"
        ];
    }
     public function messages()
    {
        return [
            'email.required'                    => 'Email dereng di isi',
            'email.email'                       => 'Email mboten sesuai',
            'password.required'                 => 'pasword dereng di isi',
            'password.alphaNum'                 => 'pasword dereng kudu nomer karo ongko',
            'password.min'                      => 'pasword kirang dowone 6 ',
            'password_confirmation.required'    => 'Password Confirmasi dereng di isi',
            'password_confirmation.same'        => 'Password kudu podo'
        ];
    }
}