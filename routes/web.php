<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SocialAuthController;

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

Route::get('/', function () {
    return view('index');
})->name('hal.utama');

Route::get('/login', function () {
    return view('login');
});

Route::get('/donasi', function () {
    return view('donasi');
});

Route::get('/transaksiuser', function () {
    return view('transaksiuser');
});

Route::get('/programuser', function () {
    return view('programuser');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/profil', function () {
    return view('profil');
});




Route::get('/chart', function () {
    return view('chart');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/indextes', function () {
    return view('indextes');
});

Route::get('/table', function () {
    return view('table');
});






// ADMIN
Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});

Route::get('/programadmin', function () {
    return view('programadmin');
});




// TES
Route::get('/tes2', function () {
    return view('tes2');
});

//ALL ROLE
Route::get('/lupapass', function () {
    return view('lupapass');
});

Route::get('/auth/redirect', [SocialAuthController::class, 'redirect'])
    ->name('google.redirect');

Route::get('/google/redirect', [SocialAuthController::class, 'googleCallback'])
    ->name('google.callback');

    Route::get('/logout', [SocialAuthController::class, 'logout']);
// TODO: route dikelompokan seperti dibawah. Buat baru jika dibutuhkan!
// Admin
Route::group([
    'prefix' => '/admin',
    'as' => 'admin.'
], function () {
    Route::get('/campaign/approve/{data}', [\App\Http\Controllers\CampaignController::class, 'approveCampaign'])->name('campaign.approve');
});

// User
Route::group([
    'prefix' => '/users',
    'as' => 'users.'
], function () {
    Route::post('/update-password/{user}', [\App\Http\Controllers\UsersController::class, 'updatePassword']);
});

// Campaign
Route::group([
    'prefix' => '/campaigns',
    'as' => 'campaigns.'
], function () {
    Route::post('/', [\App\Http\Controllers\CampaignController::class, 'store']);
});

// Donation
Route::group([
    'prefix' => '/donations',
    'as' => 'donations.'
], function () {
    Route::get('/', [\App\Http\Controllers\DonationController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\DonationController::class, 'donate'])->name('donate');
    Route::get('/user-donation', [\App\Http\Controllers\DonationController::class, 'getUserDonation'])->name('user');
});
