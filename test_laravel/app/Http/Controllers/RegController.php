<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
	
use Illuminate\Http\Request;
use App\users;
class RegController extends Controller
{
	 public function insert(request $request)
    {
    	
		$this->validate($request,[
			'username' => 'required|alpha',
			'email'=>'required|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
			'password'=>'required|min:8|max:34',
			
		],[
			'username.required'=>'username is required',
			'email.required'=>'email is required',
			'email.regex'=>'email is not valid ',
			'password.required'=>'password is required',
			
			
		]);
		if(users::where('email',$request->input('email'))->first()){
            return Redirect::back()->withInput()->withErrors(['email'=> 'email already exists']);
        }
    	$data=new users();
    	$data->username=$request->input('username');
    	$data->email=$request->input('email');
    	$data->password=($request->input('password'));

    	
    	$data->save();

    	 return view('login');
    }
    public function reg(request $request)
    {
    	
        return view('reg');

    }

}
