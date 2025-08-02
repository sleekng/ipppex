<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExhibitorsLogoController;
use App\Http\Controllers\ExpoUserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\PdfFileController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
 



     Route::post('contact', [ContactController::class, 'store'])->name('contact');

     
     Route::get('register-visitor', [ExpoUserController::class, 'visitor'])
     ->name('register.visitor');

     Route::get('register-exhibitor', [ExpoUserController::class, 'exibitor'])
     ->name('register.exhibitor');


     Route::post('register', [ExpoUserController::class, 'store'])->name('register');
     
     
     
     Route::get('login', [AuthenticatedSessionController::class, 'create'])
     ->name('login');
     
     Route::post('login', [AuthenticatedSessionController::class, 'store']);
     
     Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
     ->name('password.request');
     
     Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
     ->name('password.email');
     
     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
     ->name('password.reset');
     
     Route::post('reset-password', [NewPasswordController::class, 'store'])
     ->name('password.update');
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('admin', [RegisteredUserController::class, 'create'])
        ->name('admin');
        
        Route::get('message', [MessageController::class, 'index'])
        ->name('message');
        
        Route::get('exhibitors', [ContactController::class, 'index'])->name('exhibitors');
        
        Route::delete('exhibitors/{id}', [ContactController::class, 'destroy'])
        ->name('exhibitors.destroy');



        Route::get('newslettersubscribers', [NewsletterSubscriptionController::class, 'index'])->name('newslettersubscribers.index');
        
        Route::delete('newslettersubscribers/{id}', [NewsletterSubscriptionController::class, 'destroy'])
        ->name('newslettersubscribers.destroy');


        Route::get('newslettersubscribers-excel', [NewsletterSubscriptionController::class, 'exportToExcel'])
        ->name('newslettersubscribers.excel');

        Route::get('exhibitors-excel', [ContactController::class, 'exportToExcel'])
        ->name('exhibitors.excel');

        Route::get('visitors-excel', [ExpoUserController::class, 'exportToExcel'])
        ->name('visitors.excel');




        Route::get('exhibitorslogo', [ExhibitorsLogoController::class, 'create'])->name('exhibitorslogo');

        Route::delete('exhibitorslogo/{id}', [ExhibitorsLogoController::class, 'destroy'])
        ->name('exhibitorslogo.destroy');
        Route::post('exhibitorslogo',  [ExhibitorsLogoController::class, 'store'])->name('exhibitorslogo.store');


        Route::get('brochure', [PdfFileController::class, 'create'])->name('brochure');

        Route::post('conference',  [PdfFileController::class, 'upload'])->name('conference.upload');
        
        Route::delete('brochure/{id}', [PdfFileController::class, 'destroy'])
        ->name('brochure.destroy');

        Route::delete('/exhibitors-users', [ContactController::class, 'delete'])->name('exhibitors-users');
        Route::delete('/newsletter-subscribers', [NewsletterSubscriptionController::class, 'delete'])->name('newsletter-subscribers');


    Route::delete('admin/{id}', [RegisteredUserController::class, 'destroy'])
    ->name('admin.destroy');

Route::post('admin', [RegisteredUserController::class, 'store']);
Route::delete('register/{id}', [ExpoUserController::class, 'destroy'])->name('register.destroy');

Route::delete('/registered-users', [ExpoUserController::class, 'delete'])->name('deleteselected');

    Route::post('search-expousers', [ExpoUserController::class, 'searchExpoUsers'])->name('search-expousers');
    Route::post('search-exhibitor', [ContactController::class, 'searchexhibitors'])->name('search-exhibitor');


    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
