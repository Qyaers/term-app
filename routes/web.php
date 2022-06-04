<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use Illuminate\Http\Request;

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
	$terms = App\Models\Term::all()->toArray();
	return view('index',compact('terms'));
});

Route::get('/detail/{id}', function ($id) {
	$term = App\Models\Term::find($id)->toArray();
	$examples = App\Models\Example::where("term_id" ,"=", $id)->get()->toArray();
	return view('detail',compact('term','examples'));
});

Route::get('/searchPage/', function (Request $request) {
	$query = $request['q'];
	if($query)
		$termsSearch = App\Models\Term::where("nameTerm" ,"like", "%".$query."%")->get()->toArray();
	else
		$termsSearch = "";
	$terms = App\Models\Term::all()->toArray();
	return view('searchPage',compact('termsSearch','terms'));
});

Route::group( ['middleware' => ['auth'],'prefix' => 'admin'], function (){
	
	Route::get( "/", "TermController@index");
	Route::post( "/add", "TermController@add");
	Route::post( "/delete", "TermController@delete");
	Route::post( "/edit", "TermController@edit");

	Route::group(['prefix' => 'examples'],function () {
	
		Route::get( "/", "ExampleController@index");
		Route::post( "/add", "ExampleController@add");
		Route::post( "/delete", "ExampleController@delete");
		Route::post( "/edit", "ExampleController@edit");
	
	});
	
	Route::get( "/users", function() {
		return view('admin.user');
	});
});

Auth::routes();

