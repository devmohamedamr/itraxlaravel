<?php

use App\Http\Controllers\category;
use App\Http\Controllers\home;
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

route::get('/',[home::class,'index']);
route::get('/category',[category::class,"index"]);
route::get('/category/create',[category::class,"create"]);
route::post('/category/store',[category::class,"store"]);
route::get('/category/edit/{id}',[category::class,"edit"]);
route::get('/category/delete/{id}',[category::class,"delete"]);
route::post('/category/update',[category::class,"update"]);

