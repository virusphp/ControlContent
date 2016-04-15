<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class login extends Model implements Authenticatable 
{
	
	// nama modelnya
	public $table = "users";
}