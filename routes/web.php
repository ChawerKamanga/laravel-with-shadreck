<?php

use App\Http\Controllers\VaccineController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/vaccines/create', [VaccineController::class, 'create'])->name('vaccine.create');

Route::post('/vaccines', [VaccineController::class, 'store'])->name('vaccines.store');

Route::get('/vaccinations', [VaccineController::class, 'index'])->name('vaccination.index');

Route::delete('vaccines/{vaccine}', [VaccineController::class, 'destroy'])->name('vaccines.destroy');
Route::put('vaccines/{vaccine}', [VaccineController::class, 'update'])->name('vaccines.update');
Route::get('vaccines/{vaccine}/edit', [VaccineController::class, 'edit'])->name('vaccines.edit');




Route::get('/under-five', function ()
{
    dd('under five ');
    return null;
})->name('under-five.index');

Route::get('/parents', function ()
{
    dd('parents');
    return null;
})->name('parent.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/shad', function ()
{
    return view('shad', ['age' => 16]);
}); 

require __DIR__.'/auth.php';
