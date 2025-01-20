<?php

use App\Models\Kopi;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/coffee', function () {
    return view('coffee', [
        'name' => 'Abiyoga',
        'title' => 'About'
    ]);
});
Route::get('/menu', function () {
    return view('menu', [
        'title' => 'Menu'
    ]);
});
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    // $posts = Post::latest();
    // if (request('search')) {
    //     $posts->where('title', 'like', '%' . request('search') . '%');
    // }

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(5)->withQueryString()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    // $menu = Menu::find($slug);

    return view('post', ['title' => 'Single post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'contact'
    ]);
});
Route::get('/register', function () {
    return view('auth.register', []);
});

Route::get('/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/coffee', CoffeeController::class)
    ->middleware(['auth', 'verified'])
    ->names([
        'index' => 'listcoffee',
        'create' => 'coffee.create',
        'store' => 'coffee.store',
        'show' => 'coffee.show',
        'edit' => 'coffee.edit',
        'update' => 'coffee.update',
        'destroy' => 'coffee.destroy',
    ]);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
