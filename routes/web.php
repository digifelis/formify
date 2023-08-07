<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;



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
    return view('app');
});


//Route::post('/message/submission/{id}', [MessageController::class, 'submission'])->name('user.submission');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::get('/user/form/add', [UserController::class, 'formadd'])->name('user.formadd');
    Route::post('/user/form/add', [UserController::class, 'add']);

    Route::get('/user/form/edit/{id}', [UserController::class, 'editform'])->name('user.editform');
    Route::post('/user/form/edit/{id}', [UserController::class, 'edit']);

    Route::get('/user/form/delete/{id}', [UserController::class, 'delete'])->name('user.deleteform');

    Route::get('/user/message/{id}', [MessageController::class, 'show'])->name('user.message');
    

});




require __DIR__.'/auth.php';
