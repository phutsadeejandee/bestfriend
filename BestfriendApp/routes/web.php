<?php

use App\Models\Myday;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MydayController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/advice', function () {
    return view('advice');
});

Route::get('/welcome/{id}', [HomeController::class, 'show'])->name('welcome.show');

// Route::get('/dashboard', function () {
//     $mydays = Myday::where('user_id', Auth::id())->get();
//     return view('dashboard', compact('mydays'));
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/myday/{userId}', [MydayController::class, 'index'])->name('myday');
    Route::post('/myday/upload', [MydayController::class, 'store'])->name('upload');
    Route::get('/myday/create', [MydayController::class, 'create'])->name('myday.create');
    Route::get('/myday/edit/{id}', [MydayController::class, 'edit'])->name('myday.edit');
    Route::post('/myday/update/{id}', [MydayController::class, 'update'])->name('myday.update');
    Route::delete('/myday/{id}', [MyDayController::class, 'destroy'])->name('myday.destroy');
    Route::get('/myday/show/{id}', [MydayController::class, 'show'])->name('myday.show');

    Route::get('/advice', [AdviceController::class, 'index'])->name('advice');
    Route::post('/advice/upload', [AdviceController::class, 'store'])->name('advice.upload');
    Route::get('/advice/create', [AdviceController::class, 'create'])->name('advice.create');
    Route::get('/advice/show/{id}', [AdviceController::class, 'show'])->name('advice.show');
    Route::get('/advice/edit/{id}', [AdviceController::class, 'edit'])->name('advice.edit');
    Route::post('/advice/update/{id}', [AdviceController::class, 'update'])->name('advice.update');
    Route::delete('/advice/{id}', [AdviceController::class, 'destroy'])->name('advice.destroy');
    Route::get('/dashboard', [AdviceController::class, 'showAllData']);
    

    Route::get('/test/{userId}', [TestController::class, 'index'])->name('test');
    Route::post('/test/upload', [TestController::class, 'store'])->name('test.upload');
    Route::get('/test/create', [TestController::class, 'create'])->name('test.create');
    Route::get('/test/results', [TestController::class, 'showResults'])->name('test.results');
    Route::get('/test/show/{id}', [TestController::class, 'show'])->name('test.show');
    Route::delete('/test/{id}', [TestController::class, 'destroy'])->name('test.destroy');





});

require __DIR__.'/auth.php';
