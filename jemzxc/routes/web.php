<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;


Route::get('/showLogin', function () {
    return view('myMiddlewareDemo.login');
})->name('login_Form');


Route::post('/showLogin', function () {
    return view('myMiddlewareDemo.login');
})->middleware('login.middleware');


Route::get('/show/dashboard', function () {
    return view('myMiddlewareDemo.dashboard');
})->name('gotodashboard');


// to display the operation page
Route::get('/op', [CalculatorController::class,'showOperation'])->name('OPERATION'); 
// to display the operation page
Route::get('/addition', [CalculatorController::class,'showAddition'])->name('ADDITION'); 
Route::post('/add', [CalculatorController::class,'addition'])->name('ADD');

Route::get('/subtraction', [CalculatorController::class,'showSubtraction'])->name('SUBTRACTION'); 
Route::post('/sub', [CalculatorController::class,'subtraction'])->name('SUB');

Route::get('/multiplication', [CalculatorController::class,'showMultiplication'])->name('MULTIPLICATION'); 
Route::post('/mul', [CalculatorController::class,'multiplication'])->name('MUL');

Route::get('/division', [CalculatorController::class,'showDivision'])->name('DIVISION'); 
Route::post('/div', [CalculatorController::class,'division'])->name('DIV');











Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// // route for index
// Route::get('/index', function () {
//     return view('operations.index');
// })->name('HOME');

// // route for gallery
// Route::get('/gallery', function () {
//     return view('operations.gallery');
// })->name('GALLERY');

// // route for services
// Route::get('/services', function () {
//     return view('operations.services');
// })->name('SERVICES');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


















require __DIR__.'/auth.php';