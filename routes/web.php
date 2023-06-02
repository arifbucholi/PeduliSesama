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

Route::get('/daftarpengguna', function () {
    return view('daftarpengguna');
});

Route::get('/donasi-single', function () {
    return view('donasi-single');
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
//     Route::get('/campaign/approve/{data}', [\App\Http\Controllers\CampaignController::class, 'approveCampaign'])->name('campaign.approve');
// });

// User
Route::group([
    'prefix' => '/users',
    'as' => 'users.'
], function () {
    Route::post('/update-password/{user}', [\App\Http\Controllers\UsersController::class, 'updatePassword']);
});





// Donation
Route::group([
    'prefix' => '/donations',
    'as' => 'donations.'
], function () {
    Route::get('/form/{id}', [\App\Http\Controllers\DonationController::class, 'index']);
    // Route::get('/', [\App\Http\Controllers\DonationController::class, 'show'])->name('show');
    Route::get('donasi-single/{id}',[DonationController::class,'detail']);
    // Route::post('/', [\App\Http\Controllers\DonationController::class, 'donate'])->name('donate');
    Route::post('/confirm', [\App\Http\Controllers\DonationController::class, 'donate']);
    // Route::get('/user-donation', [\App\Http\Controllers\DonationController::class, 'getUserDonation']);
});


// Blog

// Route::post('/beritaadmin', [BlogController::class, 'store'])->name('blogs.store');
// Route::post('/beritaadmin', [BlogController::class, 'index'])->name('blogs.index');



// ------------------------------------Halaman Admin---------------------------------------------//

// Route::middleware(['auth'])->group(function(){
Route::middleware(['auth', 'cekrole'])->group(function () {
    // Route::get('/dashboardadmin', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('indexAdmin');
    // Route::get('/dashboardadmin', [App\Http\Controllers\HomeController::class, 'indexAdmin']);

    Route::get('/dashboardadmin', [App\Http\Controllers\UsersController::class, 'indexAdmin']);

    // Route::get('/dashboardadmin', [App\Http\Controllers\HomeController::class, 'dashboardAdmin']);
    // Route::get('/dashboardadmin', [App\Http\Controllers\HomeController::class, 'laravelDonatur']);



    // Dashboard Admin
    // Route::get('/dashboardadmin', [LoginController::class, 'authenticated'])->name('dashboardadmin');
    // Route::get('/dashboardadmin', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('dashboardadmin.indexAdmin');
    // Route::get('/dashboardadmin', function () {
    //     return view('dashboardadmin');
    // });

    Route::get('/dashboardadmin', [App\Http\Controllers\UsersController::class, 'count']);
    Route::get('/daftarpengguna', [App\Http\Controllers\UsersController::class, 'showUser']);

    // Route::get('/dashboardadmin', [App\Http\Controllers\CampaignController::class, 'campaignCount'])->name('campaignCount');



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

    Route::get('/campaigns', [\App\Http\Controllers\CampaignController::class, 'index'])->name('index');

    Route::get('/addcampaigns', [\App\Http\Controllers\CampaignController::class, 'create'])->name('create');
    Route::post('/campaigns/store', [\App\Http\Controllers\CampaignController::class, 'store'])->name('store');
    Route::get('/campaigns/show/{id}', [\App\Http\Controllers\CampaignController::class, 'show'])->name('show');
    Route::get('/campaigns/shows/{id}', [\App\Http\Controllers\CampaignController::class, 'shows'])->name('shows');
    Route::post('/campaigns/approveCampaign/{data}', [\App\Http\Controllers\CampaignController::class, 'approveCampaign'])->name('approveCampaign');
    // Route::post('/campaigns/updateCampaign/{data}', [\App\Http\Controllers\CampaignController::class, 'updateCampaign'])->name('updateCampaign');

    // Route::get('/transaksiuser', [\App\Http\Controllers\CampaignController::class, 'create'])->name('create');










    // Route::get('/addcampaigns', function () {
    //     return view('addcampaigns');
    // });
    // Route::get('/addcampaigns', [\App\Http\Controllers\CampaignController::class, 'store']);

    // // addCampaign
    // Route::group([
    //     'prefix' => '/addcampaigns',
    //     'as' => 'addcampaigns.'
    // ], function () {
    //     // Route::get('/', [\App\Http\Controllers\CampaignController::class, 'index'])->name('index');
    //     Route::get('/create', [\App\Http\Controllers\CampaignController::class, 'create'])->name('create');
        // Route::post('/store', [\App\Http\Controllers\CampaignController::class, 'store'])->name('store');

    // });

    // Transaksi Admin
    Route::get('/transaksiadmin', function () {
        return view('transaksiadmin');
    });

});



// ------------------------------------Halaman Guest---------------------------------------------//

// Google
Route::get('/', function () {
    return view('index');
})->name('hal.utama');

Route::get('/', [\App\Http\Controllers\CampaignController::class, 'index3'])->name('index3');


Route::get('/berita', [App\Http\Controllers\BlogController::class, 'index2'])->name('blogs.index2');

Route::get('/donasi', [\App\Http\Controllers\CampaignController::class, 'index2'])->name('index2');

// Route::get('/donasi', [\App\Http\Controllers\CampaignController::class, 'filter2'])->name('filter2');

// Route::get('/donasi', [\App\Http\Controllers\CampaignController::class, 'index2'])->name('index2');



// ------------------------------------Halaman User---------------------------------------------//


// Middleware
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/userProfiles', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('userProfiles');
    Route::get('/profilepage/{id}', [EditProfilUserController::class, 'edit']);
    Route::post('profilepage.update', [EditProfilUserController::class, 'update']);

    Route::get('/transaksiuser', [DonationController::class, 'getUserDonation']);

    Route::get('/addprogramuser', [\App\Http\Controllers\CampaignUserController::class, 'createprogram'])->name('createprogram');
    Route::post('/programuser/storeprogramuser', [\App\Http\Controllers\CampaignUserController::class, 'storeprogramuser'])->name('storeprogramuser');
    Route::get('/programuser', [\App\Http\Controllers\CampaignUserController::class, 'showprogramuser'])->name('showprogramuser');
    Route::get('/programuser/{id}', [\App\Http\Controllers\CampaignUserController::class, 'detailprogram'])->name('detailprogram');





    // Route::get('/berita', [BlogController::class, 'index2'])->name('blogs.index2');

    // Route::get('/donasi', [BlogController::class, 'index'])->name('index');


});







Auth::routes();
// Route::get('/home', function () {
//     // Tampilkan halaman login
// })->middleware('disableLoginPage');

