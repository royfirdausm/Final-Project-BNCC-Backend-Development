// routes/web.php

use App\Http\Controllers\ToyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;

Route::get('/', [ToyController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('toys', ToyController::class);
    Route::resource('carts', CartController::class);
    Route::resource('invoices', InvoiceController::class);
});

// Authentication Routes
require __DIR__.'/auth.php';
