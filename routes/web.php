<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;

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

Route::get('/', [ PagesController::class, 'landing' ] )->name('landing');
Route::get('about', [ PagesController::class,'about' ])->name('about');
Route::get('contact', [ PagesController::class,'contact' ])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function (Request $request){
   $users = [
       array('name'=>'Emeka','age'=>22),
       array('name'=>'John','age'=>23),
       array('name'=>'Marvelous','age'=>24),
   ];
return view('test', compact('users'));
});

Route::resource('users', UsersController::class);
Route::get('/posts/create',[ PostsController::class,'create' ])->name('post.create');
Route::post('/posts/store', [ PostsController::class,'store' ])->name('post.store');
Route::get('/posts/{id}/edit', [ PostsController::class,'edit' ])->name('post.edit');
Route::get('/posts', [ PostsController::class,'index' ])->name('post.all');
#Route::get('/posts/edit/{id}')

/*
 * auth
 * guest
 */


