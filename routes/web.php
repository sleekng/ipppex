<?php

use App\Http\Controllers\ExhibitorsLogoController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PdfFileController;
use App\Models\ExpoUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterSubscriptionController; 

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
Route::get('/subscribe', [NewsletterSubscriptionController::class, 'subscribeForm'])->name('subscribe.form');
Route::post('/subscribe-close', [NewsletterSubscriptionController::class, 'subscribeClose'])->name('subscribe.close');

Route::get('/conference', [PdfFileController::class, 'index'])->name('conference.index');
Route::get('/exhibitor_list', [ExhibitorsLogoController::class, 'index'])->name('exhibitor_list.index');

Route::get('/', [GeneralController::class, 'index'])->name('home'); 

Route::get('/dashboard', function () {
    $applicants = ExpoUser::orderBy('created_at', 'desc')->paginate(10);
    $applicantslength = ExpoUser::all();
    $length = $applicantslength->count();
    return view('dashboard', compact('applicants', 'length'));
})->middleware(['auth'])->name('dashboard');

Route::get('components', function(){
    return view('components');
})->name('components');

Route::get('gallery', function(){
    return view('gallery');
})->name('gallery');

Route::get('news', function(){
    return view('news');
})->name('news');

Route::post('/subscribe', [NewsletterSubscriptionController::class, 'subscribe'])->name('subscribe');

require __DIR__.'/auth.php';
