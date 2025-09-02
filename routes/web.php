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

// Temporary diagnostic routes - REMOVE AFTER FIXING
Route::get('/debug', function () {
    return [
        'php_version' => PHP_VERSION,
        'laravel_version' => app()->version(),
        'app_debug' => config('app.debug'),
        'app_env' => config('app.env'),
        'database_connection' => config('database.default'),
        'storage_writable' => is_writable(storage_path()),
        'bootstrap_cache_writable' => is_writable(bootstrap_path('cache')),
        'env_exists' => file_exists(base_path('.env')),
        'app_key_exists' => !empty(config('app.key')),
    ];
});

Route::get('/simple-test', function () {
    return 'Laravel is working!';
});

Route::get('/php-info', function () {
    return [
        'php_version' => PHP_VERSION,
        'extensions' => get_loaded_extensions(),
        'memory_limit' => ini_get('memory_limit'),
        'max_execution_time' => ini_get('max_execution_time'),
        'upload_max_filesize' => ini_get('upload_max_filesize'),
        'post_max_size' => ini_get('post_max_size'),
    ];
});

Route::get('/fix-permissions', function () {
    try {
        // Clear all caches
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('route:clear');
        
        return [
            'message' => 'Caches cleared successfully',
            'config_cleared' => true,
            'cache_cleared' => true,
            'view_cleared' => true,
            'route_cleared' => true,
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ];
    }
});

// Test mail functionality
Route::get('/test-mail', function () {
    try {
        $regData = [
            'email' => 'test@example.com',
            'company_name' => 'Test Company',
            'tagnumber' => 'TEST123'
        ];
        
        Mail::to('test@example.com')->send(new \App\Mail\ExhibitorsMail($regData));
        
        return [
            'message' => 'Test email sent successfully',
            'mail_class' => 'ExhibitorsMail found and working',
            'email_template' => 'exhibitorNotification.blade.php found'
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
            'mail_class_exists' => class_exists('\App\Mail\ExhibitorsMail'),
            'template_exists' => view()->exists('emails.exhibitorNotification'),
            'trace' => $e->getTraceAsString()
        ];
    }
});

// Test visitor mail functionality
Route::get('/test-visitor-mail', function () {
    try {
        $regData = [
            'email' => 'test@example.com',
            'name' => 'Test Visitor',
            'tagnumber' => 'VISIT123'
        ];
        
        Mail::to('test@example.com')->send(new \App\Mail\Registered($regData));
        
        return [
            'message' => 'Test visitor email sent successfully',
            'mail_class' => 'Registered found and working',
            'email_template' => 'visitorNotification.blade.php found'
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
            'mail_class_exists' => class_exists('\App\Mail\Registered'),
            'template_exists' => view()->exists('emails.visitorNotification'),
            'trace' => $e->getTraceAsString()
        ];
    }
});

// Test export functionality
Route::get('/test-exports', function () {
    try {
        return [
            'message' => 'Export functionality is working',
            'visitors_export_route' => route('visitors.excel'),
            'exhibitors_export_route' => route('exhibitors.excel'),
            'newsletters_export_route' => route('newsletters.excel'),
            'export_methods_exist' => [
                'ExpoUserController::exportToExcel' => method_exists(\App\Http\Controllers\ExpoUserController::class, 'exportToExcel'),
                'ContactController::exportToExcel' => method_exists(\App\Http\Controllers\ContactController::class, 'exportToExcel'),
                'NewsletterSubscriptionController::exportToExcel' => method_exists(\App\Http\Controllers\NewsletterSubscriptionController::class, 'exportToExcel'),
            ]
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ];
    }
});

Route::get('/test-db', function () {
    try {
        \DB::connection()->getPdo();
        return [
            'database_connected' => true,
            'database_name' => \DB::connection()->getDatabaseName(),
        ];
    } catch (\Exception $e) {
        return [
            'database_connected' => false,
            'error' => $e->getMessage(),
        ];
    }
});

Route::get('/generate-key', function () {
    try {
        \Artisan::call('key:generate');
        return [
            'message' => 'Application key generated successfully',
            'new_key' => config('app.key'),
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
        ];
    }
});

Route::get('/create-storage-link', function () {
    try {
        \Artisan::call('storage:link');
        return [
            'message' => 'Storage link created successfully',
            'storage_link_exists' => file_exists(public_path('storage')),
        ];
    } catch (\Exception $e) {
        return [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ];
    }
});

Route::get('/check-images', function () {
    $imagePaths = [
        'storage/img/precious.jpg' => file_exists(public_path('storage/img/precious.jpg')),
        'storage/img/chika.jpg' => file_exists(public_path('storage/img/chika.jpg')),
        'storage/img/plan-2.jpg' => file_exists(public_path('storage/img/plan-2.jpg')),
        'storage/img/team/nora.png' => file_exists(public_path('storage/img/team/nora.png')),
        'storage/img/team/md.jpg' => file_exists(public_path('storage/img/team/md.jpg')),
        'storage/img/team/vp.png' => file_exists(public_path('storage/img/team/vp.png')),
    ];
    
    return [
        'image_check' => $imagePaths,
        'public_storage_exists' => file_exists(public_path('storage')),
        'storage_app_public_exists' => file_exists(storage_path('app/public')),
    ];
});
