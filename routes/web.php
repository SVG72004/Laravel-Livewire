<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Login\UserLogin;
use App\Livewire\Login\AdminLogin;
use App\Livewire\CreatePost;
use App\Livewire\Post\Post;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    }
    return view('welcome');
})->name('/');

// Route::get('/', Counter::class);
if (!Auth::check()) {
    // dd(Auth::check());
    Route::get('/login', UserLogin::class)->name('login');
}

Route::get('/admin/login', AdminLogin::class)->name('admin.login');

Route::get('/CreatePost', CreatePost::class);

Route::middleware(['auth.user'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('home');
    // });

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

});
