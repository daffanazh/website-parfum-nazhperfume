<?php

    use App\Http\Controllers\BarangController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\GoogleController;

    
    
        Route::middleware('auth')->group(function () {

            Route::get('/', [BarangController::class, 'index']);
            Route::get('/tambahbarang', function(){
                return view('components.tambahbarang');
            });

            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->middleware(['auth', 'verified'])->name('dashboard');

            Route::resource('barang', BarangController::class);
            Route::get('/hapus/{id}', [BarangController::class, 'destroy'])->name('hapus');
            Route::get('/search', [BarangController::class,'search'])->name('search');
            Route::get('/tambahkeranjang/{id}', [BarangController::class, 'tambahkeranjang'])->name('tambahkeranjang');
            Route::get('/tampilkeranjang', [BarangController::class, 'tampilkeranjang'])->name('tampilkeranjang');
            
            Route::get('/profilenazhparfume/{id}', [ProfileController::class, 'editprofilenazhparfume'])->name('editprofilenazhparfume');
            Route::put('/profilenazhparfume/update/{id}', [ProfileController::class, 'updateprofilenazhparfume'])->name('updateprofilenazhparfume');
            Route::get('/get-kabupaten/{id}', 'App\Http\Controllers\ProfileController@getKabupatenByProvinsi');
            Route::get('/get-kecamatan/{id}', 'App\Http\Controllers\ProfileController@getKecamatanByKabupaten');
            Route::get('/checkout/{id}', [BarangController::class, 'checkout'])->name('checkout');
            Route::get('/checkoutdetail/{id}', [BarangController::class, 'checkoutdetail'])->name('checkoutdetail');
            // Route::get('/pesanan')
        });
    
            Route::get('/sign-up', function(){
                return view('components.login-register.sign-up');
            });
            
            Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
            Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

            require __DIR__.'/auth.php';
