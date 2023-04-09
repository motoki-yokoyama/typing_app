<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;


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

//最初のLaravelの画面。後々自作のホーム画面に変更する？
Route::get('/', function () {
    return view('welcome');
});


//未ログインのユーザーをリダイレクトする
Route::middleware(['auth'])->group(function () {
    //タイピングゲーム画面
    Route::get('questions/practice',[QuestionController::class,'practice'])->name('practice');
    
    //結果保存
    Route::post('/save-results', [ResultController::class, 'store']);
    
    //結果表示画面
    Route::get('questions/result', [ResultController::class, 'result'])->name('result');
    
    //
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
