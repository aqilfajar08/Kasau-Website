<?php

use App\Http\Controllers\CompanyPartnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController as ControllersNewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/home', function () {
    return view('pages.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/user', UserController::class);
    Route::resource('/company_partner', CompanyPartnerController::class);
    Route::get('/rating', [\App\Http\Controllers\RatingController::class, 'index'])->name('rating');
    Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form');
    Route::get('/form/{id}', [\App\Http\Controllers\FormController::class, 'show'])->name('form.show');

    // News Category
    Route::resource('/news-category', NewsCategoryController::class);
    Route::resource('/news-category/{category_id}/new', ControllersNewsController::class);

});

// kasau route
Route::get('/kasau-home', [\App\Http\Controllers\kasau\HomeController::class, 'index'])->name('kasau-home');
Route::get('/kasau-about', [\App\Http\Controllers\kasau\AboutController::class, 'about'])->name('kasau-about');
Route::get('/kasau-sinar-multi-jasa', [\App\Http\Controllers\kasau\SubCompController::class, 'SubCompany'])->name('kasau-sinar-multi-jasa');
Route::get('/kasau-sinar-sejahtera-abadi', [\App\Http\Controllers\kasau\SubCompController::class, 'SecondSubCompany'])->name('kasau-sinar-sejahtera-abadi');
Route::get('/kasau-sinar-samudera', [\App\Http\Controllers\kasau\SubCompController::class, 'ThirdSubCompany'])->name('kasau-sinar-samudera');
Route::get('/kasau-partner', [\App\Http\Controllers\kasau\PartnerController::class, 'partner'])->name('kasau-partner');
// kasau route

Route::get('/kasau/news', [\App\Http\Controllers\kasau\NewsController::class, 'index'])->name('kasau-news.index');
Route::get('/kasau/news/{id}', [\App\Http\Controllers\kasau\NewsController::class, 'show'])->name('kasau-news.show');
Route::get('/kasau-form', [\App\Http\Controllers\kasau\FormController::class, 'form'])->name('kasau-form');
Route::post('/rating', [\App\Http\Controllers\RatingController::class, 'store'])->name('rating.store');
Route::post('/form', [\App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/kasau-thanks', [\App\Http\Controllers\kasau\ThanksController::class, 'index'])->name('kasau-thanks');
Route::get('/kasau-thanksForm', [\App\Http\Controllers\kasau\ThanksController::class, 'formThanks'])->name('kasau-thanksForm');