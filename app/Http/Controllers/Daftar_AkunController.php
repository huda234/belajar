<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;

class Daftar_AkunController extends Controller
{
    public function store(){

    	$data = Input::except(array('_token'));

    	//var_dump($data);
    	$result = array(
    					'nama'=>'required',
    					'No_Telp'=>'required',
    					'Alamat'=>'required',
    				    'user'=>'required',
    				    'password'=>'required|min:6');
    	$pesan = array(
    				   'nama.required' =>'Nama Wajib Diisi',
    				   'No_Telp.required'=>'Nomer Hp Harus Diisi',
    				   'Alamat.required'=>'Alamat Harus Diisi',
    				   'user.required'=>'username Harus Diisi',
    				   'password.required'=>'password Harus Diisi',
    				   'password.min'=>'Password Diisi Minimal 6 Karakter'
    				   );
    	$validasi = Validator::make($data,$result,$pesan);
    	if ($validasi->fails()) {
    		return Redirect::to('register')->withErrors($validasi);
    	}else{
    		Register::FormStore(Input::except(array('_token')));
    		return Redirect::to('register')->with('success','Pendaftaran Berhasil');
    	}
    }

    public function sign(){

        $data = Input::except(array('_token'));

        $result = array(
                        'user'=>'required',
                        'password'=>'required' 
                        );

        $validasi = Validator::make($data, $result);

        if ($validasi->fails()) {
            return Redirect::to('login')->withErrors($validasi);
        }else{
            $userdata = array(
                              'Username' => Input::get('user'),
                              'Password'=> Input::get('password')
                              );

            if (Auth::attempt($userdata)) {
                echo "yes";
            }else{
                echo "no";
            }
        }
    }
}
