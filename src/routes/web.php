<?php


use App\Task;
use Illuminate\Http\Request;

// use Illuminate\Routing\Route;



// Route::get("book", "BookController@index");
//
// Route::get("book/{id}", "BookController@show");

Route::resource("book", "BookController");

Route::get("goda",function (){
   var_dump("test");
   return;
});


// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');