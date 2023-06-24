<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserBkashController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AgentAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/user/add', [UserBkashController::class, 'index'])->name('user.add');

    Route::post('/user/create', [UserBkashController::class, 'create'])->name('user.create');

    Route::get('/agent/add', [AgentController::class, 'index'])->name('agent.add');

    Route::post('/agent/create', [AgentController::class, 'create'])->name('agent.create');
});


Route::get('/user/login', [UserAuthController::class, 'index'])->name('user.login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login');

Route::middleware(['user.auth'])->group(function (){

    Route::get('/user/dashboard', [UserAuthController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/dashboard/send-user', [UserAuthController::class, 'send_user'])->name('user.dashboard.send-user');
    Route::get('/user/dashboard/send-agent', [UserAuthController::class, 'send_agent'])->name('user.dashboard.send-agent');

    Route::post('/user/dashboard/user/send', [UserBkashController::class, 'send_money_user'])->name('user.dashboard.user.send');
    Route::post('/user/dashboard/agent/send', [AgentController::class, 'send_money_agent'])->name('user.dashboard.user.send');

    Route::post('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');

});


Route::get('/agent/login', [AgentAuthController::class, 'index'])->name('agent.login');
Route::post('/agent/login', [AgentAuthController::class, 'login'])->name('agent.login');

Route::middleware(['agent.auth'])->group(function (){

    Route::get('/agent/dashboard', [AgentAuthController::class, 'dashboard'])->name('agent.dashboard');
    Route::post('/agent/logout', [AgentAuthController::class, 'logout'])->name('agent.logout');

});
