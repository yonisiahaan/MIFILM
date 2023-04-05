<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\User;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardPostController;

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
    return view('homepage', [
        'films' => Film::latest()->get()
    ]);
});


//Ke halaman semua film
Route::get('/films', [FilmController::class, 'index']);

//Single Post (detail)
Route::get('films/{film:slug}', [FilmController::class, 'show']);

//Kategori Film
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Film Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

//Berdasarkan kategori
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('films', [
        'title' => "Film berdasarkan Kategori : $category->name",
        'active' => 'categories',
        'films' => $category->films->load('category', 'publisher')
    ]);
});

// Berdasarkan publisher
Route::get('/publisher/{publisher:username}', function (User $publisher) {
    return view('films', [
        'title' => "Film berdasarkan Publisher : $publisher->name",
        'films' => $publisher->posts->load('category', 'publisher')

    ]);
});



Route::get('/login', function () {
    return view('login.index');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');

Route::post('/registration', [RegistrationController::class, 'store']);


// Route::get('/dashboard', function () {
//     return view('dashboard.films.index');
// })->middleware('auth');
Route::get('/dashboard/films/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/films', DashboardPostController::class)->middleware('auth');


Route::get('/film', function () {
    return view('film');
});

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/aboutus', function () {
    return view('aboutus.index');
});
