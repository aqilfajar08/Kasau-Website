<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyPartnerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kasau\AboutController as KasauAboutController;
use App\Http\Controllers\kasau\FormController;
use App\Http\Controllers\kasau\HomeController as KasauHomeController;
use App\Http\Controllers\kasau\NewsController;
use App\Http\Controllers\kasau\PartnerController;
use App\Http\Controllers\kasau\SubCompController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController as ControllersNewsController;
use App\Http\Controllers\FormController as ControllerFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});


Route::get('/home', function () {
    return view('pages.dashboard');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home'); 

// Route::resource('/user', UserController::class);
// Route::resource('/company_partner', CompanyPartnerController::class);{{  }}
// Route::resource('/rating', RatingController::class);
// Route::resource('/form', ControllerFormController::class);
// Route::resource('/news-category', NewsCategoryController::class);
// Route::resource('/news-category/{category_id}/new', ControllersNewsController::class);

// Kasau Route
// Route::get('/kasau-home', [KasauHomeController::class, 'index'])->name('kasau-home'); 
// Route::get('/kasau-about', [KasauAboutController::class, 'about'])->name('kasau-about'); 
// Route::get('/kasau-sinar-multi-jasa', [SubCompController::class, 'SubCompany'])->name('kasau-sinar-multi-jasa');
// Route::get('/kasau-sinar-sejahtera-abadi', [SubCompController::class, 'SecondSubCompany'])->name('kasau-sinar-sejahtera-abadi');
// Route::get('/kasau-sinar-samudera', [SubCompController::class, 'ThirdSubCompany'])->name('kasau-sinar-samudera');
// Route::get('/kasau-partner', [PartnerController::class, 'partner'])->name('kasau-partner');
// Route::get('/kasau-news', [NewsController::class, 'index'])->name('kasau-indexnews');
// Route::get('/kasau-form', [FormController::class, 'form'])->name('kasau-form');
// End Kasau Route

// Route::name('admin.')->prefix('admin')->middleware('admin')->group(function() {
//     Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::resource('/user', UserController::class);
//     Route::resource('/company_partner', CompanyPartnerController::class);
//     Route::get('/rating', [\App\Http\Controllers\RatingController::class, 'index'])->name('rating');
//     Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form');
//     Route::get('/form/{id}', [\App\Http\Controllers\FormController::class, 'show'])->name('form.show');

//     // News Category
//     Route::resource('/news-category', NewsCategoryController::class);
//     Route::resource('/news-category/{category_id}/new', ControllersNewsController::class);
// });

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

    Route::get('/kasau-home', [\App\Http\Controllers\kasau\HomeController::class, 'index'])->name('kasau-home');
    Route::get('/kasau-about', [\App\Http\Controllers\kasau\AboutController::class, 'about'])->name('kasau-about');
    Route::get('/kasau-sinar-multi-jasa', [\App\Http\Controllers\kasau\SubCompController::class, 'SubCompany'])->name('kasau-sinar-multi-jasa');
    Route::get('/kasau-sinar-sejahtera-abadi', [\App\Http\Controllers\kasau\SubCompController::class, 'SecondSubCompany'])->name('kasau-sinar-sejahtera-abadi');
    Route::get('/kasau-sinar-samudera', [\App\Http\Controllers\kasau\SubCompController::class, 'ThirdSubCompany'])->name('kasau-sinar-samudera');
    Route::get('/kasau-partner', [\App\Http\Controllers\kasau\PartnerController::class, 'partner'])->name('kasau-partner');

    Route::get('/kasau/news', [\App\Http\Controllers\kasau\NewsController::class, 'index'])->name('kasau-news.index');
    Route::get('/kasau/news/{id}', [\App\Http\Controllers\kasau\NewsController::class, 'show'])->name('kasau-news.show');

    Route::get('/kasau-form', [\App\Http\Controllers\kasau\FormController::class, 'form'])->name('kasau-form');
    Route::post('/rating', [\App\Http\Controllers\RatingController::class, 'store'])->name('rating.store');
    Route::post('/form', [\App\Http\Controllers\FormController::class, 'store'])->name('form.store');