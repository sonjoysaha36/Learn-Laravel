<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Example\FirstController;

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
    // dd(app());
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [FirstController::class, 'contact_index']);

Route::get('/contact/{roll}', function ($roll) {
    return "my roll id $roll";
});
Route::get('/cuntry', function () {
    return view('cuntry');
})->middleware('cuntry');
// name routing
Route::get('/address', [FirstController::class, 'index'])->name('address.us');
// })->name('address.us');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
