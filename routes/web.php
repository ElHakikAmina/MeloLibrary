<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Music;
use App\Models\Comment;
use App\Models\Artiste;
use App\Models\Bande;

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


Route::get('/dashboard', function () {
    $categorie = Category::all();
    $music = Music::all();
    $comments = Comment::all();
    $artistes = Artiste::all();
    $bandes = Bande::all();
    return view('dashboard',compact('categorie','music','comments','artistes','bandes'));
})->middleware(['auth', 'verified','is_admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::view('/', 'accueil')->name('accueil');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
// Route::view('/music', 'music')->name('music');



Route::get('/music/{id}/rate/{stars}', [\App\Http\Controllers\MusicController::class, 'rate'])->name('music.rate');

// Route::put('/comments/{comment}/approve', [\App\Http\Controllers\CommentController::class, 'approve'])->name('comments.approve');


Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);


Route::get('/search', [App\Http\Controllers\MusicController::class, 'rechercher'])->name('search');

Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('musics', \App\Http\Controllers\MusicController::class);

Route::get('musics/{mu}', [\App\Http\Controllers\MusicController::class, 'show'])->name('music.show');
Route::resource('comments', \App\Http\Controllers\CommentController::class);


Route::post('/musics/{music}/comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');


Route::get('/musics/{music}', [\App\Http\Controllers\MusicController::class, 'showComments'])->name('musics.show');


Route::resource('artistes', \App\Http\Controllers\ArtisteController::class);

Route::resource('bandes',\App\Http\Controllers\BandeController::class);

// Route::post('/music/{id}/rate', [MusicController::class, 'rate'])->name('music.rate');







