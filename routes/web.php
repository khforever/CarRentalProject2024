<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarRentalController;

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






Route::get('/', [CarRentalController::class, 'index'])->name('index');




Route::get('contact', [CarRentalController::class, 'contact'])->name('contact');






Route::get('about', [CarRentalController::class, 'about'])->name('about');




Route::get('blog', [CarRentalController::class, 'blog'])->name('blog');


Route::get('Testimonials', [CarRentalController::class, 'Testimonials'])->name('Testimonials');




Route::get('Listings', [CarRentalController::class, 'Listings'])->name('Listings');



Route::get('single/{id}', [CarRentalController::class, 'showCar'])->name('single');










Route::post('showMessage', [ContactController::class, 'receiveContact'])->name('showMessage');










//
//Route::get('single', [CarRentalController::class, 'single'])->name('single');


///////// Route::get('showPost/{id}',[PostController::class,'show']);



// Route::prefix('CarRental')->group(function () {
    
    
//     Route::get('', [CarRentalController::class, 'index'])->name('index');



// });



// Route::prefix('admins')->group(function () {
    
   



//     Route::get('addcar', [AdminController::class, 'addcar'])->name('addcar');
    
    

// Route::get('addCategory1', [AdminController::class, 'addCategory'])->name('addCategory');


// });





// Auth::routes(['verify'=>true]);
// //Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
