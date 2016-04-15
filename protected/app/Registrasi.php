<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
// membuat clas yang sama dengan nama database agar tidak bingung atau mempermudah
class Registrasi extends Model
{
	//menentukan nama table
	public $table = "users";
}
