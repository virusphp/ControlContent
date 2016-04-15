<?php 
namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class login extends Model implements Authenticatable 
{
		//menggunakan lagi
	use Illuminate\Auth\Authenticatable;
}