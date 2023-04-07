<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JournalsController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
  return view('auth.login');
});
Route::get('/about', [PagesController::class,'about']);

Route::get('/services', [PagesController::class,'services']);

Route::resource('posts', PostsController::class);
Route::resource('units', UnitsController::class);
Route::resource('users', UsersController::class);
Route::resource('journals', JournalsController::class);
Route::resource('produits', ProduitsController::class);
Auth::routes();



Route::get('/homeUnit', [App\Http\Controllers\HomeController::class, 'index'])->name('homeUnit'); 
// Route::get('/create', function () {
//     return view('posts.create');
// })->middleware(['auth', 'role:admin']);

// Route::get('/edit', function () {
//     return view('home');
// })->middleware(['auth', 'role:user']);



Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::get('/posts/create', function () {
      return view('posts.create');
  });
});
Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::get('/units/create', function () {
      return view('units.create');
  });
});
Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::get('/journals/create', function () {
      return view('journals.create');
  });
});

Route::middleware(['auth', 'role:user'])->group(function () {

  Route::get('/ ', function () {
    return view('homeUnit');
  });
});
  

Route::middleware(['auth','role:admin'])->group(function () {

  Route::get('/admin/Gere_unite', function () {
    return  view('./admin/Gere_unite');
    
  });
  Route::get('/admin/Gere_les_controles_de_gestion', function () {
    return  view('./admin/Gere_les_controles_de_gestion');
    
  });
  Route::get('/admin/Gere_Direction', function () {
    return  view('./admin/Gere_Direction');
    
  });
  Route::get('/admin/Gere_les_produit', function () {
    return  view('./admin/Gere_les_produit');
    
  });
  Route::get('/admin/Gere_les_familles', function () {
    return  view('./admin/Gere_les_familles');
    
  });
 

  
});

// Route::middleware(['auth'])->group(function () {
//   Route::get('profile',[ProfileController::class,'index'])->name('profile');
//   Route::get('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
// });

// Route::controller(ProfileController::class)->group(function(){
//   Route::get('ProfileAll','profileShow')->name('profile');
// });
// Route::middleware(['auth'])->group(function () {
//   Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
// });



Route::middleware(['auth'])->group(function () {
  Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
  Route::post('/users/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.update');
});