<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\WriteReviewController;
use App\Http\Controllers\Frontend\ReviewController;


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





//Route::get('/homepage',[HomeController::class,'homepage']);
Route::get('/home',[HomeController::class,'redirect']);

Route::get('/reviews',[ReviewController::class,'reviews']);

Route::get('/review_details/{review_id}',[ReviewController::class,'review_details']);

Route::get('/search',[HomeController::class,'search']);

Route::middleware(['auth','isUser'])->group(function(){
    Route::get('/write_reviews',[WriteReviewController::class,'write_reviews']);
    Route::post('/write_reviews',[WriteReviewController::class,'store']); 
});

Route::get('/delete_review/{review_id}',[WriteReviewController::class,'delete_review']);




Route::get('/',[HomeController::class,'redirect']);


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
