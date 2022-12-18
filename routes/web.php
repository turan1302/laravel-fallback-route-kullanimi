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
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/** ADMIN PANELI KISMI **/
Route::group(['prefix'=>'/back','as'=>'back.'],function (){
    Route::get('',function (){
        echo "Admin Panel";
    })->name('index');

    Route::get('/products',function (){
        echo "Ürünler";
    })->name('products');

    Route::get('/blog',function (){
        echo "Blog";
    })->name('blog');

    Route::fallback(function (){
        return redirect()->route('back.index');
    });
});

/** FRONT KISMI **/
Route::group(['prefix'=>'/front','as'=>'front.'],function (){
    Route::get('',function (){
        echo "Site";
    })->name('index');

    Route::get('/products',function (){
        echo "Front Ürünler";
    })->name('products');

    Route::get('/blog',function (){
        echo "Front Blog";
    })->name('blog');


    Route::fallback(function (){
       return redirect()->route('front.index');
    });
});


Route::fallback(function (){
    abort(404);
});




