<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Phone;
use App\Models\Image;
use App\Models\ImagePhone;

/*{{  }}{{--  --}}
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware(['verified', 'auth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ControlPanel', [PhoneController::class, 'controlPanel'])->middleware(['verified', 'auth']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        $phones = Phone::all();
        $images = Image::all();
        return view('home', compact('phones', 'images'));
    })->name('home');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/create', [PhoneController::class, 'create'])->middleware(['verified', 'auth']);
Route::delete('/deletePhoto/{id}', [PhoneController::class, 'deletePhoto'])->middleware(['verified', 'auth']);
Route::get('/phones/orders', [PhoneController::class, 'myOrders'])->middleware(['verified', 'auth']);
Route::post('/phones/orders/{id}', [PhoneController::class, 'addToCart'])->middleware(['verified', 'auth']);
Route::resource('/phones', PhoneController::class)->middleware(['verified', 'auth']);
