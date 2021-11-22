<?php
use App\Http\Controllers\PostController;
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
    return view('index');
});

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('index', [PostController::class, 'index'])->name('index');

Route::get('aboutme', [PostController::class, 'aboutme'])->name('aboutme');
Route::get('contact', [PostController::class, 'contact'])->name('contact');
Route::get('sample', [PostController::class, 'sample'])->name('sample');


