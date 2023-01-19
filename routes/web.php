<?php

use App\Http\Controllers\CRM\Categories\CustomerCategoryController;
use App\Http\Controllers\CRM\Categories\ScheduleCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRM\MainController;
use App\Http\Controllers\CRM\UserController;

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

Route::get(
    'notifications/get',
    [App\Http\Controllers\CRM\NotificationController::class, 'getNotificationsData']
)->name('notifications.get');


Route::middleware('auth')->prefix('crm', )->group(function () {
    Route::get('/', [MainController::class,'main'])->name('main.index');

    /**
     * ROUTES USERS
     */
    Route::any('users/search', [UserController::class,'search'])->name('users.search') ;
    Route::resource('users', UserController::class);

    /**
     * ROUTES CUSTOMERS
     */

    Route::name('customers.')->prefix('customers')->group(function () {
        /**
         * Categories
         */
        Route::any('categories/search', [CustomerCategoryController::class,'search'])->name('categories.search') ;
        Route::resource('categories',CustomerCategoryController::class);
    });

    /**
     * ROUTES SCHEDULES
     */

     Route::name('schedules.')->prefix('schedules')->group(function () {
        /**
         * Categories
         */
        Route::any('categories/search', [ScheduleCategoryController::class,'search'])->name('categories.search') ;
        Route::resource('categories',ScheduleCategoryController::class);
    });
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
