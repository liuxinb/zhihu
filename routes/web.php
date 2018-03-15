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

/*---------test模板------------*/
Route::get('admin/index', function () {
    return view('admin.index');
});

//login登陆
Route::get('admin/login', function () {
    return view('admin.login');
});

//table表格
Route::get('admin/table', function () {
    return view('admin.table');
});

//form表单
Route::get('admin/amazeui', function () {
    return view('admin.amazeui');
});

//form表单2
Route::get('admin/line', function () {
    return view('admin.line');
});

//图片表格
Route::get('admin/list', function () {
    return view('admin.list');
});

    /*---------后台功能------------*/

    // Route::resource('users', 'App\Http\Controllers\admin\usersController');
    // Route::get('users', 'userController@index');