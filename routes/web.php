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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/submit-post', function () {
    return view('submit-post');
});

Route::get('/blog','FrontController@blog');

Route::get('/volunteer','FrontController@volunt')->name('volunteer');

Route::get('/gallery','FrontController@gallery');

Route::get('blog/{slug}','FrontController@single')->name('blog.single');
Route::post('/contact/store','FrontController@contact')->name('contact.store');
Route::post('/volunteer/store','FrontController@volunteer')->name('volunteer.store');
Route::get('/user/logout/','Auth\LoginController@userLogout')->name('user.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category','CategoryController');
Route::post('category/editItem/', 'CategoryController@editItem');
Route::post('category/deleteItem/', 'CategoryController@deleteItem');
Route::resource('post', 'PostController');
Route::post('post/deleteItem/', 'PostController@deleteItem');
Route::resource('image', 'GalleryController');
Route::resource('school', 'SchoolController');
Route::resource('contacts', 'ContactController');
Route::post('contacts/deleteItem/', 'ContactController@deleteItem');
Route::resource('volunteers', 'VolunteerController');
Route::post('volunteers/deleteItem/', 'VolunteerController@deleteItem');
Route::post('school/editItem/', 'SchoolController@editItem');
Route::post('school/deleteItem/', 'SchoolController@deleteItem');
