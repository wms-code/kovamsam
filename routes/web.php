<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|git clone "git@github.xxxx.com:blablabla/reponame.git /Users/myname/dev/myfolder"
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('git', function () {
    $data   = [];    
    $data[] = shell_exec("git pull https://sethunathan::asdfghjkl12!@#$^@github.com/wms-code/kovamsam.git");   
    dd($data);
    
});

