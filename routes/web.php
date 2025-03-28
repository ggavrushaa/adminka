<?php

use Faker\Provider\ar_EG\Address;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '{locale}', 
    'middleware' => ['setlocale']
], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/contacts', 'contacts')->name('contacts');
    Route::view('/about', 'about')->name('about');
    Route::view('/technology', 'technology')->name('technology');
    Route::view('/cases', 'cases')->name('cases');
    Route::view('/services/web', 'services.web');
    Route::view('/services/automation', 'services.automation');
    Route::view('/services/mobile', 'services.mobile');
    Route::view('/services/support', 'services.support');
    Route::view('/cases/varto', 'works.varto');
});

Route::redirect('/', '/en');
