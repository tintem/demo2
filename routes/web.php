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
  //  return view('welcome');
  $b = DB::table('book')->get();
    return view('v2', ['b'=>$b]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Cac chuc nang admin
Route::get('/admin', 'AdminController@index')->name('indexAdmin');
Route::get('admin/san-pham-{id?}', function($id='')
{
	//return view('adminSanpham', $id);
	$data = array();
	if ($id=='') 
		//echo "Danh sach san pham";
		$data[]="danh sach san pham!";
	else
		$data[] ="Chi tiet san pham co id = $id";
	//echo "Quan ly san pham: $id";
	return view("adminSanpham")->with("s", $data);
});

Route::resource('demo','demoController');
//Route::get('admin/san-pham/{id?}')