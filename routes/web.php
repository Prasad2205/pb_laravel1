<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|REMEMBER: 
| 	 /posts  				|view all post
	GET		/posts/create  	|add post request
	POST 	/posts     		|after submit save to database
	GET 	/posts/{id}/edit|edit post
	DELETE 	/posts/{id}		|delete post
	GET 	/posts/{id}
	PATCH 	/posts/{id}   	|view speacific post
*/
Route::get('/', function () {
    return view('welcome');
});
Route::resource('products','ProductController');    //Resource helps in using by default routes 
//Route::get('/add_product','ProductController@createProduct');

Route::get('/about',function(){
	return view('about');
});

Route::get('/contact',function(){
	return view('contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*---NEW ROUTE FOR POSTS---*/

//Route::get('/posts','PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

