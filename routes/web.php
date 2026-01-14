<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');

Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'km'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
})->name('lang.switch');