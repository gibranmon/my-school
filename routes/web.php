<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

use App\Http\Controllers\AddressController;

Route::get('/addresses/students', [AddressController::class, 'studentsAddresses'])->name('addresses.students');
Route::get('/addresses/teachers', [AddressController::class, 'teachersAddresses'])->name('addresses.teachers');