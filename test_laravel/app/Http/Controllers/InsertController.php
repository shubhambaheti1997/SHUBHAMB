<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\users;

use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function insert(request $request)
    {
    	$data=new users();
    	$data->username=$request->input('username');
    	$data->email=$request->input('email');
    	$data->password=bcrypt($request->input('password'));


    	$data->save();

  
    /*
         $username=$request->input('username');
         $email=$request->input('email');
         $password=$request->input('password');

         $data=array('username'=>$username,'email'=>$email,'password'=>$password);

         DB::table('users')->Insert($data);*/
    }
}
