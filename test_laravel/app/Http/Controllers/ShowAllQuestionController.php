<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShowAllQuestionController extends Controller
{
    public function fetchC(request $request)
    {
        $deb = DB::table('cquestions')->get();

        return view('showQuestion.c')->with('deb', $deb);

    }

    public function fetchJava(request $request)
    {
        $deb = DB::table('java_questions')->get();

        return view('showQuestion.java')->with('deb', $deb);

    }

    public function fetchPython(request $request)
    {
        $deb = DB::table('python_questions')->get();

        return view('showQuestion.python')->with('deb', $deb);

    }

    public function fetchAndroid(request $request)
    {
        $deb = DB::table('android_questions')->get();

        return view('showQuestion.android')->with('deb', $deb);

    }
    public function fetchUsers(request $request)
    {
        $deb = DB::table('users')->get();

        return view('users')->with('deb', $deb);

    }

}
