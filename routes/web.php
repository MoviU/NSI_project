<?php

use App\Http\Controllers\Admin\CatalogController as AdminCatalogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\FormCreateController;
use App\Models\Catalog;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $categories = Catalog::all('name');
    return view('index', [
        'categories' => $categories
    ]);
})->name('index');

Route::get('sendform', function () {
    return view('sendform');
})->name('sendform');

Auth::routes(['register' => false, 'home' => false]);

Route::get('/form/create', [FormCreateController::class, 'create']);
Route::post('/form/store', [FormCreateController::class, 'store']);
Route::get('/catalog/{category}', [CatalogController::class, 'index']);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_index');
    Route::resource('form', FormController::class);
    Route::resource('catalog', AdminCatalogController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
