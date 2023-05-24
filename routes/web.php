<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;

Route::get('/', HomePageController::class);

//Backend Routes
Route::middleware('auth','verified')->group(function () {


    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/change-password', [DashboardController::class, 'password'])->name('updateform');
    Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('update-password');


    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // for about section
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::post('about', [AboutController::class, 'store'])->name('about.store');

    // for banner section.
    Route::get('banner', [BannerController::class, 'index'])->name('banner.index');
    Route::post('banner', [BannerController::class, 'store'])->name('banner.store');

    //for project
    Route::resource('project', ProjectController::class);
    // Route::get('portfolio',[PortfolioController::class,'index'])->name('portfolio.index');
    // Route::post('portfolio',[PortfolioController::class,'store'])->name('portfolio.store');

// for settings

Route::get('setting',[SettingController::class,'index'])->name('setting.index');
Route::post('setting',[SettingController::class,'update'])->name('setting.update');

//for contact page
Route::post('contact',[ContactController::class,'save'])->name('contact.save');
Route::get('contact',[ContactController::class,'index'])->name('contact.index');
Route::delete('contact/{contact}',[ContactController::class,'delete'])->name('contact.delete');


//for skill
Route::resource('skill',SkillController::class);
});
Route::get('/test', function(){
    return view('test');
});


require __DIR__ . '/auth.php';
