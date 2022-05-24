<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('/index', 'App\Http\Controllers\FrontendController@index');

Route::get('/post/{id}', 'App\Http\Controllers\FrontendController@blog')-> name('post');

//just for creating front-end pagesx
Route::get('/createtask', function () {
    return view('tasks.create');
});

Route::get('/managetask', function () {
    return view('tasks.index');
});

Route::resource('task','App\Http\Controllers\TaskController');

Route::get('export', [TaskController::class, 'export'])->name('export');
Route::post('import', [TaskController::class, 'import'])->name('import');

Auth::routes();

// Redirecting register to 404 not found page
// Route::match(['get', 'post'], 'register', function(){
//     return abort(404);
// });

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

// Route::resource('user','App\Http\Controllers\UserController')->middleware('auth');
// Route::resource('category','App\Http\Controllers\BlogsCategoryController')->middleware('auth');
// Route::resource('menu','App\Http\Controllers\MenuController')->middleware('auth');
Route::resource('user','App\Http\Controllers\UserController');
Route::resource('category','App\Http\Controllers\BlogsCategoryController');
Route::resource('menu','App\Http\Controllers\MenuController');
Route::resource('siteconfig','App\Http\Controllers\SiteConfigController');
Route::resource('filemanager','App\Http\Controllers\FileManagerController');
Route::resource('slider','App\Http\Controllers\SliderController');
Route::resource('blog','App\Http\Controllers\BlogController');
