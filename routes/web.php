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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {

        Route::get('/brands', function () {
            return view('admin/brands');
        });
         Route::get('/categoryitems', function () {
            return view('admin/categoryitems');
        });
        Route::get('/categoryproducts', function () {
            return view('admin/categoryproducts');
        });
        Route::get('/coloroptions', function () {
            return view('admin/coloroptions');
        });
         Route::get('/customers', function () {
            return view('admin/customers');
        });
          Route::get('/items', function () {
            return view('admin/items');
        });
           Route::get('/products', function () {
            return view('admin/products');
        });
        Route::get('/roles', function () {
            return view('admin/roles');
        });
        Route::get('/sizeoptions', function () {
            return view('admin/sizeoptions');
        });
        Route::get('/suppliers', function () {
            return view('admin/suppliers');
        });
        Route::get('/tagitems', function () {
            return view('admin/tagitems');
        });
        Route::get('/tagproducts', function () {
            return view('admin/tagproducts');
        });

        Route::get('/weightoptions', function () {
            return view('admin/weightoptions');
        });
        Route::get('/users', function () {
            return view('admin/users');
        });
       
       Route::get('/branddetails1', function () {
            return view('admin/branddetails1');
        });

        Route::get('/brand2', function () {
            return view('admin/brand2');
        });
         
    });


    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/brands', function () {
            return view('front/brands');
        });
    });

 });