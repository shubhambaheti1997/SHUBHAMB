<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;

class FetchDataController extends Controller
{
    public function fetch(request $request)
    {

        $users = DB::table('users')->select('id', 'username', 'email')->get();

        return view('fetch_data')->with('users', $users);

    }

}
