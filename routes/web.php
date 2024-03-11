<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\homeController;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('aefsef');
// });


Route::get('/', [homeController::class, 'index']);

Route::get('/buku buku', [bookController::class, 'index']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' =>  $category->nama,
        'books' => $category->books,
        'active' => 'categories'

    ]);
});
