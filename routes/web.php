<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/contacts', 'contacts');
Route::view('/about', 'about');
Route::view('/technology', 'technology');
Route::view('/cases', 'cases');
Route::view('/services/web', 'services.web');
Route::view('/services/automation', 'services.automation');
Route::view('/services/mobile', 'services.mobile');
Route::view('/services/support', 'services.support');
Route::view('/cases/varto', 'works.varto');