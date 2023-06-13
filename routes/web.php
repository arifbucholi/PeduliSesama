<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CampaignUserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\API\SocialAuthController;
use App\Http\Controllers\EditProfilUserController;
use App\Http\Controllers\TransaksiAdminController;

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








// Route::get('/daftar', function () {
    //     return view('daftar');
    // });

    // Route::get('/login', function () {
        //     return view('login');
        // });


        // Route::get('/berita', function () {
        //     return view('berita');
        // });



Route::get('/chart', function () {
    return view('chart');
});

Route::get('/asdw', function () {
    return view('asdw');
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



Route::get('/basic_elements', function () {
    return view('basic_elements');
});

Route::get('/basic-table', function () {
    return view('basic-table');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/chartjs', function () {
    return view('chartjs');
});

Route::get('/dropdowns', function () {
    return view('dropdowns');
});

Route::get('/mdi', function () {
    return view('mdi');
});

Route::get('/typography', function () {
    return view('typography');
});






// TES
Route::get('/tes2', function () {
    return view('tes2');
});

// Route::get('/beritaedit', function () {
//     return view('beritaedit');
// })->name('beritaadmin');

//ALL ROLE
// Route::get('/lupapass', function () {
//     return view('lupapass');
// });

Route::get('/auth/redirect', [SocialAuthController::class, 'redirect'])
    ->name('google.redirect');

Route::get('/google/redirect', [SocialAuthController::class, 'googleCallback'])
    ->name('google.callback');

    Route::get('/logout', [SocialAuthController::class, 'logout']);


// TODO: route dikelompokan seperti dibawah. Buat baru jika dibutuhkan!
// Admin
// Route::group([
//     'prefix' => '/admin',
//     'as' => 'admin.'
// ], function () {
//     Route::get('/campaign/approve/{data}', [CampaignController::class, 'approveCampaign'])->name('campaign.approve');
// });

// User
Route::group([
    'prefix' => '/users',
    'as' => 'users.'
], function () {
    Route::post('/update-password/{user}', [UsersController::class, 'updatePassword']);
});








// Blog

// Route::post('/beritaadmin', [BlogController::class, 'store'])->name('blogs.store');
// Route::post('/beritaadmin', [BlogController::class, 'index'])->name('blogs.index');



// ------------------------------------Halaman Admin---------------------------------------------//

// Route::middleware(['auth'])->group(function(){
Route::middleware(['auth', 'cekrole'])->group(function () {
    // Route::get('/dashboardadmin', [HomeController::class, 'indexAdmin'])->name('indexAdmin');
    // Route::get('/dashboardadmin', [HomeController::class, 'indexAdmin']);

    Route::get('/dashboardadmin', [UsersController::class, 'indexAdmin'])->name('dashboardadmin');

    Route::get('/dashboardadmin', [UsersController::class, 'count']);
    Route::get('/daftarpengguna', [UsersController::class, 'showUser']);
    // Route::get('/daftarpengguna', [UsersController::class, 'count']);

    // Program Admin
    Route::get('/programadmin', function () {
        return view('programadmin');
    });


    // Berita Admin
    Route::get('/beritaadmin', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/beritaadmin/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/beritaadmin/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/beritaedit/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/beritaedit/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/beritadelete/{id}/destroy', [BlogController::class, 'destroy'])->name('blogs.destroy');

    Route::get('/tambahberita', function () {
        return view('tambahberita');
    });

    Route::get('/campaigns', [CampaignController::class, 'index'])->name('index');

    Route::get('/addcampaigns', [CampaignController::class, 'create'])->name('create');
    Route::post('/campaigns/store', [CampaignController::class, 'store'])->name('store');
    Route::get('/campaigns/show/{id}', [CampaignController::class, 'show'])->name('show');
    Route::get('/campaigns/shows/{id}', [CampaignController::class, 'shows'])->name('shows');
    Route::post('/campaigns/approveCampaign/{data}', [CampaignController::class, 'approveCampaign'])->name('approveCampaign');
    // Route::post('/campaigns/updateCampaign/{data}', [CampaignController::class, 'updateCampaign'])->name('updateCampaign');




    // // addCampaign
    // Route::group([
    //     'prefix' => '/addcampaigns',
    //     'as' => 'addcampaigns.'
    // ], function () {
    //     // Route::get('/', [CampaignController::class, 'index'])->name('index');
    //     Route::get('/create', [CampaignController::class, 'create'])->name('create');
        // Route::post('/store', [CampaignController::class, 'store'])->name('store');

    // });

    // Transaksi Admin
    Route::get('/transaksiadmin', [TransaksiAdminController::class, 'index'])->name('index');

    // Route::get('/transaksiadmin', function () {
    //     return view('transaksiadmin');
    // });

});



// ------------------------------------Halaman Guest---------------------------------------------//

// Google
// Route::get('/', function () {
//     return view('index');
// })->name('hal.utama');

// Home
Route::get('/', [CampaignController::class, 'index3'])->name('index3');
// Route::get('/home', [\HomeController::class, 'index3'])->name('hal.utama');

// Berita
Route::get('/berita', [BlogController::class, 'index2'])->name('blogs.index2');

// Donasi
Route::get('/donasi', [CampaignController::class, 'index2'])->name('index2');
Route::get('/donations/donasi-single/{id}',[DonationController::class,'detail']);
// Route::get('/donations//donasi-single', [\DonationController::class, 'categoryList']);
// Route::get('/donations/donasi-single/{id}/sideProgram', [\DonationController::class, 'sideProgram'])->name('sideProgram');








// Route::get('/donasi', [\CampaignController::class, 'filter2'])->name('filter2');

// Route::get('/donasi', [\CampaignController::class, 'index2'])->name('index2');



// ------------------------------------Halaman User---------------------------------------------//


// Middleware
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/userProfiles', [HomeController::class, 'userProfile'])->name('userProfiles');
    Route::get('/profilepage/{id}', [EditProfilUserController::class, 'edit']);
    Route::post('profilepage.update', [EditProfilUserController::class, 'update']);

    Route::get('/changepass', [EditProfilUserController::class, 'changepass_page']);
    Route::post('/updatepass', [EditProfilUserController::class, 'update_password']);

    Route::get('/transaksiuser', [DonationController::class, 'getUserDonation']);
    Route::get('/invoice/{id}', [DonationController::class, 'donation_invoice']);

    Route::get('/addprogramuser', [CampaignUserController::class, 'createprogram'])->name('createprogram');
    Route::post('/programuser/storeprogramuser', [CampaignUserController::class, 'storeprogramuser'])->name('storeprogramuser');
    Route::get('/programuser', [CampaignUserController::class, 'showprogramuser'])->name('showprogramuser');
    Route::get('/programuser/{id}', [CampaignUserController::class, 'detailprogram'])->name('detailprogram');

    // Donation
    Route::group([
        'prefix' => '/donations',
        'as' => 'donations.'
    ], function () {
        Route::get('/form/{id}', [DonationController::class, 'index']);
        // Route::get('/', [DonationController::class, 'show'])->name('show');
        // Route::get('donasi-single/{id}',[DonationController::class,'detail']);
        // Route::post('/', [DonationController::class, 'donate'])->name('donate');
        Route::post('/confirm', [DonationController::class, 'donate']);
        // Route::get('/user-donation', [DonationController::class, 'getUserDonation']);
    });






    // Route::get('/berita', [BlogController::class, 'index2'])->name('blogs.index2');

    // Route::get('/donasi', [BlogController::class, 'index'])->name('index');


});







Auth::routes();
// Route::get('/home', function () {
//     // Tampilkan halaman login
// })->middleware('disableLoginPage');

