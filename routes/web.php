<?php
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

// Admin
Route::get('/admin/products', [AdminProductController::class, 'index'])->middleware(['auth'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->middleware(['auth'])->name('admin.products.create');
Route::post('/admin/products', [AdminProductController::class, 'store'])->middleware(['auth'])->name('admin.products.store');

Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->middleware(['auth'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->middleware(['auth'])->name('admin.products.update');

Route::delete('/admin/products/{product}/delete', [AdminProductController::class, 'destroy'])->middleware(['auth'])->name('admin.products.destroy');

Route::get('/admin/products/{product}/delete-image', [AdminProductController::class, 'destroyImage'])->middleware(['auth'])->name('admin.products.destroyImage');

Route::get('/welcome', function () {
    return view("welcome");
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
