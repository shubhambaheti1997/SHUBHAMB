<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteAllContoller extends Controller
{
    public function deletec($name)
    {
        DB::delete('delete from cquestions where question = ?', [$name]);
        return redirect()->back()->with('message', 'Question Deleted succesfully');
    }

    public function deleteJava($name)
    {
        DB::delete('delete from java_questions where question = ?', [$name]);
        return redirect()->back()->with('message', 'Question Deleted succesfully');
    }

    public function deletePython($name)
    {
        DB::delete('delete from python_questions where question = ?', [$name]);
        return redirect()->back()->with('message', 'Question Deleted succesfully');
    }

    public function deleteAndroid($name)
    {
        DB::delete('delete from android_questions where question = ?', [$name]);
        return redirect()->back()->with('message', 'Question Deleted succesfully');
    }

    public function deleteUsers($name)
    {
        DB::delete('delete from users where username = ?', [$name]);
        return redirect()->back()->with('message', 'User Deleted succesfully');
    }
}
