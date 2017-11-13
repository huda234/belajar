<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
// class Register extends Model
// {

	protected $table = "pelanggan";

    public static function FormStore($data){
		$Nama     = Input::get('nama');
		$No       = Input::get('No_Telp');
		$Alamat   = Input::get('Alamat');
		$username = Input::get('user');
		$pass     = Hash::make(Input::get('password'));
		
		$users    = new Register();
		
		$users->Nama     =$Nama;
		$users->No       =$No;
		$users->Alamat   =$Alamat;
		$users->Username =$username;
		$users->Password =$pass;

		$users->save();

    }
}
