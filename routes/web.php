<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomTyPeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Client\AuthController;
use App\Models\Slider;

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

Route::get('/admin', function () {
    return view('admin/layout_master/layout_master');
})->name('admin');
Route::get('/profile', function () {
    return view('user.profile.index');
})->name('user.profile.index');
Route::get('/profile_ss', function () {
    return view('user.profile.edit');
})->name('user.profile.edit');
Route::get('/', function () {
    $ListSlider = Slider::paginate(10);
    return view('frontend/layouts/master', [
        'data' => $ListSlider,
    ]);
});
Route::get('/send-mail', [Tesmail::class, 'Tesmail']);
Route::get('/admin', function () {
    return view('admin/layout_master/layout_master');
})->name('admin');
Route::get('/', function () {
    $ListSlider = Slider::paginate(10);
    return view('frontend/layouts/master', [
        'data' => $ListSlider,
    ]);
})->name('home');

Route::get('/detail', function(){
    return view('frontend/layouts/room_detail');
});
//auth
Route::get('/redirect', 'Client\AuthController@redirectToProvider')->name("login.provider");
Route::get('/google/callback', 'Client\AuthController@handleProviderCallback');

Route::get('/register', 'Client\AuthController@register')->name('auth.getRegisterForm');
Route::post('/register', 'Client\AuthController@registerPost')->name('register.form');

Route::get('/login', 'Client\AuthController@login')->name('auth.getLoginForm');
Route::post('/login', 'Client\AuthController@loginPost')->name('login.form');

Route::get('/logout', 'Client\AuthController@logout')->name('auth.logout');
//endauth

//clien
Route::get('/about', 'Client\AboutController@index')->name('about');
Route::get('/contact', 'Client\ContactController@index')->name('contact');
Route::get('/single', 'Client\SingleController@index')->name('single');

Route::get('/room_type/{id}', 'Client\HomeController@room_types')->name('room_type');
Route::get('/room_detail/{id}', 'Client\HomeController@room_detail')->name('room_detail');
Route::post('/add_comment/{id}', 'Client\HomeController@comment')->name('add_comment');
//endclien

Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
], function () {
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.',
    ], function () {
        Route::get('/', 'RoomTyPeController@index')->name('index');
        Route::get('create', 'RoomTyPeController@create')->name('create');
        Route::post('store', 'RoomTyPeController@store')->name('store');
        Route::get('edit/{id}', 'RoomTyPeController@edit')->name('edit');
        Route::post('update/{id}', 'RoomTyPeController@update')->name('update');
        Route::post('delete/{id}', 'RoomTyPeController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'rooms',
        'as' => 'rooms.',
    ], function () {
        Route::get('/', 'RoomController@index')->name('index');
        Route::get('create', 'RoomController@create')->name('create');
        Route::post('store', 'RoomController@store')->name('store');
        Route::get('edit/{id}', 'RoomController@edit')->name('edit');
        Route::post('update/{id}', 'RoomController@update')->name('update');
        Route::post('delete/{id}', 'RoomController@delete')->name('delete');
    });
    
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');
        Route::get('edit/{id}', 'UserController@edit')->name('edit');
        Route::post('update/{id}', 'UserController@update')->name('update');
        Route::post('delete/{id}', 'UserController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'sliders',
        'as' => 'sliders.',
    ], function () {
        Route::get('/', 'SliderController@index')->name('index');
        Route::get('create', 'SliderController@create')->name('create');
        Route::post('store', 'SliderController@store')->name('store');
        Route::get('edit/{id}', 'SliderController@edit')->name('edit');
        Route::post('update/{id}', 'SliderController@update')->name('update');
        Route::post('delete/{id}', 'SliderController@delete')->name('delete');
    });
    
    Route::group([
        'prefix' => 'posts',
        'as' => 'posts.',
    ], function () {
        Route::get('/', 'PostController@index')->name('index');
        Route::get('create', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('edit/{id}', 'PostController@edit')->name('edit');
        Route::post('update/{id}', 'PostController@update')->name('update');
        Route::post('delete/{id}', 'PostController@delete')->name('delete');
    });
});
