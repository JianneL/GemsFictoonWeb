<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return Redirect::route('login');
});

Route::prefix('reader')->middleware(['auth'])->group(function(){
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome.welcome');
    
    Route::get('/community', function () {
        return view('community');
    })->name('community.community');;
    
    Route::get('/account', function () {

        return view('account',[
           
        ]);
    })->name('account.account');
});

Route::get('/about', function () {
    return view('about');
})->name('about.about');

Route::get('/library', function () {
    return view('library');
})->name('library.library');;



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::prefix('admin/')->group(function() {
    Route::get('dashboard',function(){
        return view('Admin/LandingPage');
    })->name('dashboard');
});

Route::prefix('author/')->group(function() {
    Route::get('dashboard',function(){
        return view('Author/LandingPage');
    })->name('dashboard');

    Route::get('book/index',function(){
        return view('Author/Books/BookIndex');
    })->name('book.index');

    Route::get('book/create',function(){
        return view('Author/Books/BookCreate');
    })->name('book.create');

    Route::get('book/view',function(){
        return view('Author/Books/BookView');
    })->name('book.view');

    Route::get('book/chapter/create',function(){
        return view('Author/Books/Chapter/ChapterCreate');
    })->name('book..chapter.create');

    Route::get('book/chapter/view',function(){
        return view('Author/Books/Chapter/ChapterView');
    })->name('book..chapter.view');
});

Route::prefix('reader/')->group(function() {
    Route::get('dashboard',function(){
        return view('Reader/LandingPage');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
