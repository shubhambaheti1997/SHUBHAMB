<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateAll extends Controller
{
    public function updateC(Request $request)
    {

        $name = $request->input('question');

        $op1 = $request->input('optiona');
        $op2 = $request->input('optionb');
        $op3 = $request->input('optionc');
        $op4 = $request->input('optiond');
        $ans = $request->input('corrans');
        return view('update.update')->with(['name' => $name, 'op1' => $op1, 'op2' => $op2, 'op3' => $op3, 'op4' => $op4, 'ans' => $ans]);
    }

    public function updateDatac(Request $request)
    {

        $data = $request->input('updatequestion');//text data
        $data1 = $request->input('question'); // hidden
        $op11 = $request->input('updateoptiona'); //text data
        $op22 = $request->input('updateoptionb');
        $op33 = $request->input('updateoptionc');
        $op44 = $request->input('updateoptiond');
        $ans1 = $request->input('updateans');


        DB::table('cquestions')
            ->where('question', $data1)
            ->update(['question' => $data, 'op1' => $op11, 'op2' => $op22, 'op3' => $op33, 'op4' => $op44, 'ans' => $ans1]);

        return redirect('showc')->with('message', ' Updated  succesfully');

    }
    public function updateJava(Request $request)
    {

        $name = $request->input('question');

        $op1 = $request->input('optiona');
        $op2 = $request->input('optionb');
        $op3 = $request->input('optionc');
        $op4 = $request->input('optiond');
        $ans = $request->input('corrans');
        return view('update.updatejava')->with(['name' => $name, 'op1' => $op1, 'op2' => $op2, 'op3' => $op3, 'op4' => $op4, 'ans' => $ans]);
    }
    public function updateDataJava(Request $request)
    {

        $data = $request->input('updatequestion');//text data
        $data1 = $request->input('question'); // hidden
        $op11 = $request->input('updateoptiona'); //text data
        $op22 = $request->input('updateoptionb');
        $op33 = $request->input('updateoptionc');
        $op44 = $request->input('updateoptiond');
        $ans1 = $request->input('updateans');


        DB::table('java_questions')
            ->where('question', $data1)
            ->update(['question' => $data, 'op1' => $op11, 'op2' => $op22, 'op3' => $op33, 'op4' => $op44, 'ans' => $ans1]);

        return redirect('showjava')->with('message', ' Updated  succesfully');

    }
    public function updatePython(Request $request)
    {

        $name = $request->input('question');

        $op1 = $request->input('optiona');
        $op2 = $request->input('optionb');
        $op3 = $request->input('optionc');
        $op4 = $request->input('optiond');
        $ans = $request->input('corrans');
        return view('update.updatepython')->with(['name' => $name, 'op1' => $op1, 'op2' => $op2, 'op3' => $op3, 'op4' => $op4, 'ans' => $ans]);
    }
    public function updateDataPython(Request $request)
    {

        $data = $request->input('updatequestion');//text data
        $data1 = $request->input('question'); // hidden
        $op11 = $request->input('updateoptiona'); //text data
        $op22 = $request->input('updateoptionb');
        $op33 = $request->input('updateoptionc');
        $op44 = $request->input('updateoptiond');
        $ans1 = $request->input('updateans');


        DB::table('python_questions')
            ->where('question', $data1)
            ->update(['question' => $data, 'op1' => $op11, 'op2' => $op22, 'op3' => $op33, 'op4' => $op44, 'ans' => $ans1]);

        return redirect('showpython')->with('message', ' Updated  succesfully');

    }
    public function updateAndroid(Request $request)
    {

        $name = $request->input('question');

        $op1 = $request->input('optiona');
        $op2 = $request->input('optionb');
        $op3 = $request->input('optionc');
        $op4 = $request->input('optiond');
        $ans = $request->input('corrans');
        return view('update.updateandroid')->with(['name' => $name, 'op1' => $op1, 'op2' => $op2, 'op3' => $op3, 'op4' => $op4, 'ans' => $ans]);
    }
    public function updateDataAndroid(Request $request)
    {

        $data = $request->input('updatequestion');//text data
        $data1 = $request->input('question'); // hidden
        $op11 = $request->input('updateoptiona'); //text data
        $op22 = $request->input('updateoptionb');
        $op33 = $request->input('updateoptionc');
        $op44 = $request->input('updateoptiond');
        $ans1 = $request->input('updateans');


        DB::table('android_questions')
            ->where('question', $data1)
            ->update(['question' => $data, 'op1' => $op11, 'op2' => $op22, 'op3' => $op33, 'op4' => $op44, 'ans' => $ans1]);

        return redirect('showandroid')->with('message', ' Updated  succesfully');

    }
}
