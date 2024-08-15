<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\TourShow;



Route::get('/', [App\Http\Livewire\Tours::class, '__invoke'])->name('tours.index');
Route::get('/tours/create', [App\Http\Livewire\CreateTour::class, '__invoke'])->name('tours.create');
Route::get('/tours/{tour}', [App\Http\Livewire\TourShow::class, '__invoke'])->name('tours.show');
