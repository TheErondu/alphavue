<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Models\Services;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');
Route::get('projects', [ProjectController::class,'index']);
Route::get('projects/{project}', [ProjectController::class,'show']);
Route::resource('services', Services::class);
Route::get('about/who-we-are',[PageController::class,showWhoWeArePage])->name('about.who-we-are');
Route::get('about/due-diligence',[PageController::class,showDueDiligencePage])->name('about.due-diligence');;
Route::get('about/faqs',[PageController::class,'showFaqsPage'])->name('about.faqs');
Route::resource('team', Services::class);
Route::get('contact',[PageController::class,'contact'])->name('about.contact');
Auth::routes();

//AdminRoutes
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::resource('projects', ProjectController::class)->except(['index','show']);
});
