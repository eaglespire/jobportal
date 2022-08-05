<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;

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

Route::controller(PagesController::class)->group(function (){
    Route::get('/', 'landing' )->name('landing');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
});
Route::controller(HomeController::class)->group(function (){
    Route::get('home','index')->name('home') ;
});
//Route prefix
Route::controller(EmployerController::class)->prefix('employer')->name('employer.')->group(function (){
   Route::get('/','dashboard')->name('dashboard');
});
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function (){
    Route::get('/','dashboard')->name('dashboard');
});
Auth::routes();

//We protect routes in web applications using middleware
//laravel uses the auth middleware to protect users only page
      //->middleware()





