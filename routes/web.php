<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/**
 * Route pour la gestion de l'authentification
 */
Route::middleware(['auth'])->group(function () {
    
});

require __DIR__.'/auth.php';
