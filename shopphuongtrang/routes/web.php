<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');
Route::get('home', 'PageController@index')->name('web.home');
Route::get('detail/{id}', 'PageController@getDetail')->name('web.detail');
Route::get('about', 'PageController@getAbout')->name('web.about');
Route::get('contact', 'PageController@getContact')->name('web.contact');
Route::get('type-product/{id}', 'PageController@getTypeProduct')->name('web.type-product');
Route::get('sign-in', 'PageController@getUserSignIn')->name('web.signin');
Route::get('sign-up', 'PageController@getUserSignUp')->name('web.signup');
Route::post('sign-up', 'PageController@postUserSignup')->name('web.post.signup');
Route::post('sign-in', 'PageController@postUserSignin')->name('web.post.signin');
Route::get('sign-out', 'PageController@userSignOut')->name('web.signout');
Route::get('check-out', 'PageController@getCheckOut')->name('web.checkout');
Route::get('shopping-cart', 'PageController@getCart')->name('web.cart');

Route::get('add-cart/{id}', 'PageController@addCart')->name('web.addcart');
