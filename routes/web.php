<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('students', StudentController::class);

    // Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    // Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    // Route::get('/students/destroy', [StudentController::class, 'destroy'])->name('students.destroy');
    // Route::get('/students/show', [StudentController::class, 'show'])->name('students.show');
    // Route::get('/students/edit', [StudentController::class, 'edit'])->name('students.edit');
});
