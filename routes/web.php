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
    // dd(\App\User::find(4)->delete());
    dd(\App\User::create([
        'name' => 'test user',
        'email' => 'test.user@framgia.com',
        'password' => bcrypt('123456'),
     ]));
    // \App\User::find(5)->update([
    // 	'name' => 'Tien Dat Duong 1992'
    // ]);
});

Route::get('/test', function () {
    return view('test');
});