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

Route::get('/', function () {return view('home');});
Route::get('signup', function () {return view('front.SignUp');})->name('signup');
Route::get('Member', function () {return view('front.Member');})->name('member');
Route::get('terms-and-conditions', function () {return view('front.TermsAndConditions');})->name('termsandcondition');
Route::get('about', function () {return view('front.about');})->name('about');
Route::get('mentorship', function () {return view('front.mentorship');})->name('mentorship');
Route::get('community', function () {return view('front.community');})->name('community');
Route::get('education', function () {return view('front.education');})->name('education');
Route::get('getmentor', function () {return view('front.getmentor');})->name('getmentor');
Route::get('becomementor', function () {return view('front.BecomeMentor');})->name('becomementor');
Route::get('almostthere', function () {return view('front.AlmostThere');})->name('almostthere');
Route::get('becom-a-mentor-step3', function () {return view('front.becomamentorstep2');})->name('becomamentorstep2');

Route::get('sendmail', 'UserController@sendMail')->name('sendmail');

Route::post('Save-Information-get-mentor', 'MemberdetailController@store')->name('detailformsave');
Route::post('Save-Information-become-Mentor', 'MemberdetailController@becomamentorsave')->name('becomamentorstep3');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/confirm-account/{token}', 'UserController@confirmAccount');
