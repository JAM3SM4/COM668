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
   // $name = request('name');
    return view('welcome');
});

Route::get('/contactus', function () {
    // $name = request('name');
     return view('contactus');
 });

 Route::get('/aboutus', function () {
    // $name = request('name');
     return view('aboutus');
 });

 Route::get('/moreinfo', function () {
    // $name = request('name');
     return view('moreinfo');
 });

 Route::get('/terms', function () {
    // $name = request('name');
     return view('terms');
 });

 Route::get('/events', function () {
    // $name = request('name');
     return view('events');
 });

 Route::get('/sponsor', function () {
    // $name = request('name');
     return view('sponsor');
 });

//Route::get('test', function () {
//    return view('test',  [
//        'name' => request('name')
//    ]);


//Route::get('/welcome', function () {
 //   return view('welcome');

//Route::get('/posts/{post}', 'PostsController@show');
//});