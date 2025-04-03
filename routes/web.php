<?php

use Faker\Provider\ar_EG\Address;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::group([
    'prefix' => '{locale}', 
    'middleware' => ['setlocale']
], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/contacts', 'contacts')->name('contacts');
    Route::view('/about', 'about')->name('about');
    Route::view('/technology', 'technology')->name('technology');
    Route::view('/cases', 'cases')->name('cases');
    Route::view('/services/web', 'services.web')->name('service.web');
    Route::view('/services/automation', 'services.automation')->name('service.automation');
    Route::view('/services/mobile', 'services.mobile')->name('service.mobile');
    Route::view('/services/support', 'services.support')->name('service.support');
    Route::view('/cases/varto', 'works.varto')->name('works.varto');
    Route::view('/cases/yozh', 'works.yozh')->name('works.yozh');
    Route::view('/blog', 'blog.index');
    Route::view('/blog/{id}', 'blog.show')->name('blog.show');
    Route::view('/partners', 'partners');
    Route::get('/form', [FormController::class, 'index'])->name('form');
});

Route::redirect('/', destination: '/en');
