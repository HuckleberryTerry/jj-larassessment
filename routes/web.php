<?php

use App\Http\Controllers\ProfileController;
use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/companies', function(){
    return view('companies', [
        'companies' => Companies::all(),
    ]);
});

Route::get('/employees', function(){
    return view('employees', [
        'employees' => Employees::all(),
    ]);
});

// Route::get('/login', function(){
//     return view('login');
// });

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
