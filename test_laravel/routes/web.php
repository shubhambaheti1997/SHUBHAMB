<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('login');
});

Route::resource('form','FormController');

Route::get('login','LoginController@login');
Route::get('reg','RegController@reg');
Route::post('login','RegController@insert');
Route::get('userlogin','LoginController@userLogin');

Route::group(['middleware' => 'prevent-back-history'],function(){

    
Route::post('dashboard','LoginController@checklogin');
});

// for adding questions
Route::post('show','ShowController@index');
Route::post('addc','AddQuestion@c');
Route::post('addjava','AddQuestion@java');
Route::post('addpython','AddQuestion@python');
Route::post('addandroid','AddQuestion@android');
// get all questions
Route::get('getc','FetchAllQuestionContoller@fetchC');
Route::get('getjava','FetchAllQuestionContoller@fetchjava');
Route::get('getpython','FetchAllQuestionContoller@fetchpython');
Route::get('getandroid','FetchAllQuestionContoller@fetchandroid');
Route::get('fetch','FetchDataController@fetch');

// get result 
Route::post('cresult','FetchAllQuestionContoller@resultC');
Route::post('javaresult','FetchAllQuestionContoller@resultJava');
Route::post('pythonresult','FetchAllQuestionContoller@resultPython');
Route::post('androidresult','FetchAllQuestionContoller@resultAndroid');


// Route::get('abc', function(){
//     return view('result');
// });

// admin home
Route::get('adminlogin','LoginController@adminlogin');
Route::post('home','LoginController@adminchecklogin');
// Route::get('home', function () {
//     return view('admin.home');
// });

Route::get('c', function () {
    return view('c.admin_c');
});
Route::get('java', function () {
    return view('java.admin_java');
});
Route::get('android', function () {
    return view('android.admin_android');
});
//Route::get('result', function () {
 //   echo 'hello result' ;
//});
Route::get('python', function () {
    return view('python.admin_python');
});
Route::get('quiz', function () {
    return view('category.home');
});
Route::get('userhome','LoginController@home');


// showAll Question in Adminside
Route::get('showc','ShowAllQuestionController@fetchC');
Route::get('showjava','ShowAllQuestionController@fetchJava');
Route::get('showpython','ShowAllQuestionController@fetchPython');
Route::get('showandroid','ShowAllQuestionController@fetchAndroid');
Route::get('users','ShowAllQuestionController@fetchUsers');


// Delete Question from adminside
Route::get('deletec/{name}','DeleteAllContoller@deletec');
Route::get('deletejava/{name}','DeleteAllContoller@deleteJava');
Route::get('deletepython/{name}','DeleteAllContoller@deletePython');
Route::get('deleteandroid/{name}','DeleteAllContoller@deleteAndroid');
Route::get('deleteusers/{name}','DeleteAllContoller@deleteUsers');

// update data adminsite
Route::get('updatec', 'updateAll@updateC');
Route::get('updatedata', 'updateAll@updateDatac');
Route::get('updatejava', 'updateAll@updateJava');
Route::get('updatejava', 'updateAll@updateJava');
Route::get('updatedatajava', 'updateAll@updateDataJava');
Route::get('updatepython', 'updateAll@updatePython');
Route::get('updateandroid', 'updateAll@updateAndroid');
Route::get('updatedataandroid', 'updateAll@updateDataAndroid');
Route::get('updatedatapython', 'updateAll@updateDataPython');
?>
