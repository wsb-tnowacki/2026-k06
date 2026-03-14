<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('start');

/* Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
})->name('test'); */
Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');
Route::get('/o-nas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3',
    ];
    return view('onas',['zadania'=>$zadania]);
})->name('onas');