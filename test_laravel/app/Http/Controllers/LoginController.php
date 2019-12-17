<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

use Illuminate\Http\Request;
use App\users;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
	}
	public function adminLogin()
    {
        return view('adminlogin');
	}
	public function adminchecklogin(request $request)
    {

        $em=$request->input('email');// getting data from  html
        $pass=$request->input('password');

        $email='admin@gmail.com';
        $password='admin';

        if($em==$email && $pass==$password)
        {
               return view('admin.home');
        }

        else
            {
            echo "invalid";
        }



    }
    public function checklogin(request $request)
    {

    	$em=$request->input('email');// getting data from  html
    	$pass=$request->input('password');
    	

    	 $email = users::where('email',$em)->first(); // match data html and database 
    	$password = users::where('password',$pass)->first();
        $demo=DB::table('users')->where('email',$em)->value('username'); // for getting current user
		if ($email && $password) {
			session(['User'=>$em]);
 			session(['user_name'=>$demo]);
			// //print_r($request->input('email'));
			// $request->session()->put('email',$request->input('email'));
			// echo $request->session()->get('email');

		   	return view('dashboard')->with(['usern'=>$demo]);
		}
		else {
			return redirect()->back()->with('message', 'Invalid details');


		}

    	 // if($email==$email1 ){
    	 // 	echo "yes";
    	 // }
    	 // else {
    	 // 	echo "no";
    		
    	 // }

    
		}
		public function home(request $request){
	
			
	
				   return view('dashboard');
			}
		public function userLogin(request $request){
		
						Session::flush();
		
					   return view('login');
				}
			
}
