<?php
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route:: group(['middleware' => 'web'] , function(){
    Route::get('/', [UserController::class ,"studentlist"])->name('studentlist');
Route::get('/create', [UserController::class ,"create"])->name('create');
Route::post('/store', [UserController::class ,"store"])->name('store');
Route::delete('/{student}/delete', [UserController::class ,'delete' ])->name('delete');


Route::get('/dashboard', function () {
    return view('dashboard');
    //  return redirect()->route('studentlist' );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
});


