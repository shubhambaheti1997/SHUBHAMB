<?php

namespace App\Http\Controllers;

use App\AndroidQuestion;
use App\Cquestion;
use App\JavaQuestion;
use App\PythonQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddQuestion extends Controller
{


    public function c(request $request)
    {
        $data=new Cquestion();
        $data->question=$request->input('question');
        $data->op1=$request->input('a');
        $data->op2=$request->input('b');
        $data->op3=$request->input('c');
        $data->op4=$request->input('d');
        $data->ans=$request->input('ans');


        $data->save();
        return redirect()->back()->with('message', 'Question is succesfully inserted');

    }

    public function python(request $request)
    {
        $data=new PythonQuestion();
        $data->question=$request->input('question');
        $data->op1=$request->input('a');
        $data->op2=$request->input('b');
        $data->op3=$request->input('c');
        $data->op4=$request->input('d');
        $data->ans=$request->input('ans');


        $data->save();
        return redirect()->back()->with('message', 'Question is succesfully inserted');
    }

    public function android(request $request)
    {
        $data=new AndroidQuestion();
        $data->question=$request->input('question');
        $data->op1=$request->input('a');
        $data->op2=$request->input('b');
        $data->op3=$request->input('c');
        $data->op4=$request->input('d');
        $data->ans=$request->input('ans');


        $data->save();
        return redirect()->back()->with('message', 'Question is succesfully inserted');

    }

    public function java(request $request)
    {

        $data=new JavaQuestion();
        $data->question=$request->input('question');
        $data->op1=$request->input('a');
        $data->op2=$request->input('b');
        $data->op3=$request->input('c');
        $data->op4=$request->input('d');
        $data->ans=$request->input('ans');


        $data->save();
        return redirect()->back()->with('message', 'Question is succesfully inserted');
    }



}
