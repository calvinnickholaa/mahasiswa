<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::get("/", [MahasiswaController::class, 'index']);
Route::get("/create", [MahasiswaController::class, 'create'])->name("create");
Route::post("/store", [MahasiswaController::class, 'store'])->name("store");
Route::get("/edit/{id}", [MahasiswaController::class, 'edit'])->name("edit");
Route::post("/update/{id}", [MahasiswaController::class, 'update'])->name("update");
Route::delete("/destroy/{id}", [MahasiswaController::class, 'destroy'])->name("destroy");

Route::get("/fak", [FakultasController::class, 'indexs']);
Route::get("/creates", [FakultasController::class, 'creates'])->name("creates");
Route::post("/stores", [FakultasController::class, 'stores'])->name("stores");
Route::get("/edits/{id}", [FakultasController::class, 'edits'])->name("edits");
Route::post("/update/{id}", [FakultasController::class, 'update'])->name("update");
Route::delete("/destroy/{id}", [FakultasController::class, 'destroy'])->name("destroy");
    
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
