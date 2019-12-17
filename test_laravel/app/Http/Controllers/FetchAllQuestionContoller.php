<?php

namespace App\Http\Controllers;
use App\Cquestion;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FetchAllQuestionContoller extends Controller
{
    public function fetchC(request $request)
    {
        $data = DB::table('cquestions')->get();

        return view('category.fetchC')->with('data', $data);

    }

    public function fetchJava(request $request)
    {
        $data = DB::table('java_questions')->get();

        return view('category.fetchjava')->with('data', $data);

    }

    public function fetchPython(request $request)
    {
        $data = DB::table('python_questions')->get();

        return view('category.fetchpython')->with('data', $data);

    }

    public function fetchAndroid(request $request)
    {
        $data = DB::table('android_questions')->get();

        return view('category.fetchandroid')->with('data', $data);

    }

    public function resultC(request $request)
    {
        $result=0;
        
        $abc=DB::table('cquestions')->get();
        $count=count($request->input('option', []));
         
          foreach($request->input('option', []) as $option) { 
              foreach($abc as $xyz)   
              {
                  if($option==$xyz->ans)
                  {
                        $result++;
                  }
                 
              }
            
         }
         return view('result')->with(['result'=>$result,'count'=>$count]);
         
        
    }
    public function resultJava(request $request)
    {
        $result=0;
        
        $abc=DB::table('java_questions')->get();
        $count=count($request->input('option', []));
         
          foreach($request->input('option', []) as $option) { 
              foreach($abc as $xyz)   
              {
                  if($option==$xyz->ans)
                  {
                        $result++;
                  }
                 
              }
            
         }
         //echo $count;
         return view('result')->with(['result'=>$result,'count'=>$count]);
         
        
    }
    public function resultPython(request $request)
    {
        $result=0;
        
        $abc=DB::table('python_questions')->get();
        $count=count($request->input('option', []));
         
          foreach($request->input('option', []) as $option) { 
              foreach($abc as $xyz)   
              {
                  if($option==$xyz->ans)
                  {
                        $result++;
                  }
                 
              }
            
         }
         //echo $count;
         return view('result')->with(['result'=>$result,'count'=>$count]);
         
        
    }
    public function resultAndroid(request $request)
    {
        $result=0;
        
        $abc=DB::table('android_questions')->get();
        $count=count($request->input('option', []));
         
          foreach($request->input('option', []) as $option) { 
              foreach($abc as $xyz)   
              {
                  if($option==$xyz->ans)
                  {
                        $result++;
                  }
                 
              }
            
         }
         //echo $count;
         return view('result')->with(['result'=>$result,'count'=>$count]);
         
        
    }
}
