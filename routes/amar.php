<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\FirstController;

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

Route::get('/test/{name}', function ($name) {
    return view('test')->with('name', $name);
})->name('test');

Route::get('redirect/{name}', function($name){
    return redirect('test/'.$name);
})->name('redirect');

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get(md5('contact'), [FirstController::class, 'index'])->name('contact.page');


Route::get('/country', function(Request $request){
    return view('country')->with('country_name', $request->country);
})->middleware('country');