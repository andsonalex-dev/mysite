<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\linkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Livewire\ProjectComponent;
use Livewire\Livewire;


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


Route::get('/', [Controller::class, 'index'])->name('/');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('socialmedia', function(){
    return view('social.view');
})->name('socialmedia');

Route::get('projects', ProjectComponent::class)->name('projects')->middleware('auth');
Route::get('/showproject/{id}', [ProjectController::class, 'show'])->name('showproject');
Route::get('bio', [bioController::class, 'index'])->name('bio')->middleware('auth');
Route::get('biograph', [bioController::class,'view'])->name('biograph');
Route::get('link', [linkController::class, 'index'])->name('link')->middleware('auth');

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');



