<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/vue', function () {
    return view('vue');
})->name('students.vue');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    # Ruta prueba con Vue
    Route::get('/addresses/students/list', [AddressController::class, 'studentsAddressesList'])->name('addresses.students.list');

    # Rutas principales para lista únicamente las direcciones de alumnos y docentes
    Route::get('/addresses/students', [AddressController::class, 'studentsAddresses'])->name('addresses.students');
    Route::get('/addresses/teachers', [AddressController::class, 'teachersAddresses'])->name('addresses.teachers');

    # Rutas Resource para CRUD de Alumnos y Maestros
    Route::resource('student', StudentController::class);
    Route::resource('teacher', TeacherController::class);

    # Ruta para consultar los cursos
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
});

require __DIR__.'/auth.php';
