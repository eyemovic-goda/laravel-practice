<?php

use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::get("/hello", "helloController@index");
Route::post("/hello", "helloController@post");
Route::post("/hello/add", "helloController@add");
Route::get("/hello/add", "helloController@index");

Route::get("/hello/edit", "helloController@edit")->name("hello.edit");
Route::post("/hello/update", "helloController@update");

Route::get("hello/delete", "helloController@delete");
Route::post("hello/remove", "helloController@remove");

Route::get("/person", "PersonController@index");
Route::get("/person/find", "PersonController@find");
Route::post("/person/find", "PersonController@search");

Route::get("/person/add", "PersonController@add");
Route::post("/person/add", "PersonController@create");

Route::get("/person/edit", "PersonController@edit");
Route::post("/person/edit", "PersonController@update");

Route::get("/person/delete", "PersonController@delete");
Route::post("/person/delete", "PersonController@remove");

Route::get("/board", "BoardController@index");
Route::post("/board/add", "BoardController@create");

Route::resource("rest", "RestappController");
