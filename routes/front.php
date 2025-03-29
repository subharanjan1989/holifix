<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

Route::get('clear_cache', function () {
\Artisan::call('cache:clear');
\Artisan::call('config:cache');
\Artisan::call('route:clear');
\Artisan::call('view:clear');
\Artisan::call('config:clear');
dd("Cache/Config cache is cleared");
});

Route::get('/', [HomeController::class, 'homePage'])->name('front.home_page');
