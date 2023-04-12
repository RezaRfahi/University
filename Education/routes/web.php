<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PanelController;
use \App\Http\Livewire\Panel\Index as PanelIndex;
use App\Http\Livewire\Panel\Users as PanelUsers;
use App\Http\Livewire\Panel\Users\CreateUser as PanelCreateUser;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(callback: function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('panel')->group(callback: function (){
        Route::get('/', PanelIndex::class)->name('panel.index');
        Route::prefix('users')->group(callback: function (){
            Route::get('/', PanelUsers::class)->name('panel.users');
            Route::get('/createuser', PanelCreateUser::class)->name('panel.user.create');
        });
    });
});
