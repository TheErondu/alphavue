<?php

use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', [PageController::class, 'showHomePage'])->name('main');
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/{project}/details', [ProjectController::class, 'show'])->name('projects.show');
Route::resource('services', ServicesController::class);
Route::get('about/who-we-are', [PageController::class, 'showWhoWeArePage'])->name('about.who-we-are');
Route::get('about/due-diligence', [PageController::class, 'showDueDiligencePage'])->name('about.due-diligence');
;
Route::get('about/faqs', [PageController::class, 'showFaqsPage'])->name('about.faqs');
Route::resource('team', TeamController::class);
Route::get('contact', [PageController::class, 'showContactUsPage'])->name('about.contact');
Auth::routes();

//AdminRoutes
Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home.index');
    Route::patch('home/sections/update', [App\Http\Controllers\Admin\HomeController::class, 'updateSections'])->name('home.sections.update');
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
});