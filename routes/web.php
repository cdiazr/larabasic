<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController,
    App\Http\Controllers\UserController,
    App\Http\Controllers\SettingController,
    App\Http\Controllers\RoleController,
    App\Http\Controllers\StatusController;

use Illuminate\Support\Facades\App;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /**
     * User routes
     */
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('user.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('user.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.destroy');
    });

    /**
     * Role routes group
     */
    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    });

    /**
     * Status routes group
     */
    Route::prefix('status')->group(function () {
        Route::get('/', [StatusController::class, 'index'])->name('status.index');
        Route::get('edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
    });

    /**
     * Settings routes group, just for devs
     */
    Route::prefix('settings')->group(function () {
       Route::get('/', [SettingController::class, 'index'])->name('setting.index');
    });

    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::post('/chat/response', [ChatController::class, 'getChatResponse'])->name('chat.response');

});

Route::get('/set_language/{lang}', [Controller::class, "setLanguage"])->name( 'set_language');
Route::get('/language/{lang}', function($language) {
    App::setLocale($language);
    session()->put('language', $language);
    return back();
})->name( 'language');

require __DIR__.'/auth.php';
