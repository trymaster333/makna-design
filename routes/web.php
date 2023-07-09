<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PaketHargaController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portofolio/{id}', [HomeController::class, 'portofolio'])->name('home.portofolio');

// ADMIN LOGIN AUTHENTICATION
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        //DASHBOARD
        //Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //ABOUT
        Route::get('about', [AboutController::class, 'index'])->name('about');
        Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
        /*Route::get('/about', function () {
            return view('admin/about', ['title' => 'About']);
        })->name('about');*/

        //KONTAK
        Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
        Route::get('/kontak/list', [KontakController::class, 'kontakData'])->name('kontak.list');
        Route::get('/kontak/edit/{id}', [KontakController::class, 'edit'])->name('kontak.edit');
        Route::put('/kontak/{id}', [KontakController::class, 'update'])->name('kontak.update');
        Route::get('/kontak/add', [KontakController::class, 'create'])->name('kontak.add');
        Route::post('/kontak/store', [KontakController::class, 'store'])->name('kontak.store');
        Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');

        //PORTOFOLIO
        Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
        Route::get('/portofolio/list', [PortofolioController::class, 'portoData'])->name('portofolio.list');
        Route::get('/portofolio/add/data', [PortofolioController::class, 'create'])->name('portofolio.add');
        Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolio.store');
        Route::get('/portofolio/edit/{id}', [PortofolioController::class, 'edit'])->name('portofolio.edit');
        Route::put('/portofolio/{id}', [PortofolioController::class, 'update'])->name('portofolio.update');
        Route::delete('/portofolio/{id}', [PortofolioController::class, 'destroy'])->name('portofolio.destroy');

        //PAKET HARGA
        Route::get('/paket-harga', [PaketHargaController::class, 'index'])->name('paket-harga');
        Route::get('/paket-harga/list', [PaketHargaController::class, 'pakethargaData'])->name('paket-harga.list');
        Route::get('/paket-harga/add/data', [PaketHargaController::class, 'create'])->name('paket-harga.add');
        Route::post('/paket-harga/store', [PaketHargaController::class, 'store'])->name('paket-harga.store');
        Route::get('/paket-harga/edit/{id}', [PaketHargaController::class, 'edit'])->name('paket-harga.edit');
        Route::put('/paket-harga/{id}', [PaketHargaController::class, 'update'])->name('paket-harga.update');
        Route::delete('/paket-harga/{id}', [PaketHargaController::class, 'destroy'])->name('paket-harga.destroy');

        //FAQ
        Route::get('/faq', [FaqController::class, 'index'])->name('faq');
        Route::get('/faq/list', [FaqController::class, 'faqData'])->name('faq.list');
        Route::get('/faq/add/data', [FaqController::class, 'create'])->name('faq.add');
        Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
        Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
        Route::put('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');
        Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');

        //REVIEW
        Route::get('/review', [ReviewController::class, 'index'])->name('review');
        Route::get('/review/list', [ReviewController::class, 'reviewData'])->name('review.list');
        Route::get('/review/add/data', [ReviewController::class, 'create'])->name('review.add');
        Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
        Route::get('/review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
        Route::put('/review/{id}', [ReviewController::class, 'update'])->name('review.update');
        Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

        //setting
        Route::get('/setting', [SettingController::class, 'index'])->name('setting');
        Route::get('/setting/edit', [SettingController::class, 'edit'])->name('setting.edit');
        Route::get('/setting/password', [UserController::class, 'settingpw'])->name('setting.password');
        Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');
    });
});

//LOGIN FORM
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('admin', [UserController::class, 'login'])->name('login');
Route::post('admin', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');

//logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');


Route::post('/file-upload', [ImageController::class, 'upload'])->name('upload.image')->middleware('auth');