<?php

use Illuminate\Support\Facades\Route;

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
    /*  return view('fumetti', compact('fumetti')) */
    return view('home');
})->name('home');

/* Route fumetti */
Route::get('/fumetti', function () {

    $fumetti = config('fumetti.data');
    return view('comics.index', compact('fumetti'));

})->name('fumetti');

route::get('fumetti/{id}', function ($id) {

    $fumetti = config('fumetti.data');

    if (is_numeric($id) && $id < count($fumetti) && $id >= 0) {
        $fumetto = $fumetti[$id];
        return view('comics.show', compact('fumetto'));
    } else {
        abort(404);
    }
    // ddd($fumetti[$id]);
})->name('fumetto');