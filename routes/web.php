<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\domaincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/domain',[domaincontroller::class,"generateDomain"]);

Route::get('/privacy',function(){
    return view('privacy');
});

Route::get('/terms-conditions',function(){
    return view('terms');
});

Route::get('/frequently-questions',function(){
    return view('frequently-questions');
});

Route::get('/tips-creating-domains',function(){
    return view('tips-for-domains');
});