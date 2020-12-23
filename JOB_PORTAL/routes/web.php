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

Route::get('/', function () {
    echo "MINI PROJECT for a JOB PORTAL<br><a href='login'>LOGiN</a>";                  // "localhost:8000" page shows what we write here
});


// Route::get('/welcome', function(){
// 	return view('test');                                           ///Test file for rendering using >>Route::get<< Method
// });


Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);


Route::middleware(['sess'])->group(function()                     ///Session setup for all files under login page using group(function());
{
	    Route::group(['middleware'=>['userType']], function()
      {
        	   Route::get('/admin_home', 'HomeController@index');

          Route::get('/admin_home/edit/{id}', 'AdminHomeController@edit');
		        Route::post('/admin_home/edit/{id}', 'AdminHomeController@update');
		          Route::get('/admin_home/delete/{id}', 'AdminHomeController@delete');
		            Route::post('/admin_home/delete/{id}', 'AdminHomeController@destroy');
	     });
});


//####################without grouping###############################

/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/

// ####################maybe gets erro...[unsure me :(  ]################################
