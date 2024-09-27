<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BukutamuController;
 
Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/us', [BukutamuController::class, 'index'])->name('us.index');
    Route::post('/simpan-buku-tamu', [BukuTamuController::class, 'simpan'])->name('us.simpan');
});

 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get('/us', function () {
    return view('buktamuser/us');
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/us', [BukutamuController::class, 'index'])->name('us');
});
Route::get('/admin', function () {
    // Admin dashboard
})->middleware('user.access:admin');

Route::get('/manager', function () {
    // Manager dashboard
})->middleware('user.access:manager');