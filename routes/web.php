<?php

use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    // return new JobPosted();
   \Illuminate\Support\Facades\Mail::to('okaz692@gmail.com')->send(
        new \App\Mail\JobPosted()
   );
    return 'Done';
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('index');
Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('job.create')->middleware('auth');
Route::post('jobs/create', [App\Http\Controllers\JobController::class, 'store'])->name('job.store')->middleware('auth');

Route::middleware('guest')->group(function(){
    Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create']);
    Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'create']);
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'store']);
});

Route::delete('/logout', [App\Http\Controllers\LoginController::class, 'destroy'])->middleware('auth');

Route::get('/search', App\Http\Controllers\SearchController::class);
Route::get('/tags/{tag:name}', App\Http\Controllers\TagController::class);

