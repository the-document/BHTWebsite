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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//=================Hand code===========================
//Route::get('/Home','HomeController@index');

//// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::post('posts/CreateNewPost',function (){
//    return view('home');
//});

//Users-----------------------------------------------------------------------------------------
Route::get('users/{id}','UsersController@GetProfileUser');

//Documents-----------------------------------------------------------------------------------------
Route::get('documents','DocumentController@GetAllCatalog');
Route::get('documents/upload','DocumentController@GetUploadDocumentView');
Route::get('documents/{idCatalog}','DocumentController@GetDocumentOfCatalog');
Route::get('documents/details/{idDocument}','DocumentController@GetDocument');
Route::post('documents/upload','DocumentController@UploadDocument');

//Post-----------------------------------------------------------------------------------------
Route::get('posts/CreateNewPost','PostsController@GetCreatePost');
Route::post('posts/CreateNewPost','PostsController@CreatePost');

Route::get('posts','PostsController@GetPosts');
Route::get('post/{id}', 'PostsController@GetPost');

Route::post('post/delete/{id}','PostsController@DeletePost');


//API-------------------------------------------------------------------------------------------
Route::get('api',function (){
    return view('test');
});