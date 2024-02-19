<?php

use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarRentalController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Auth\RegisterController;

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




    Route::group(['middleware' => ['auth','verified']], function ()

    { 


///////////Car



Route::get('cars', [CarController::class, 'index'])->name('cars');

Route::get('addCar', [CarController::class, 'create'])->name('addCar');
Route::post('storeCar', [CarController::class, 'store'])->name('storeCar');

Route::get('editCar/{id}', [CarController::class, 'edit'])->name('editCar');

Route::put('updateCar/{id}',[CarController::class,'update'])->name('updateCar');


Route::get('destroyCar/{id}',[CarController::class,'destroy'])->name('destroyCar');




///////////////////////////////////////////////////////////////////////


///////Testimonial
Route::get('testimonials_admin', [TestimonialController::class, 'index'])->name('testimonials_admin');

Route::get('addTestimonials', [TestimonialController::class, 'create'])->name('addTestimonials');
Route::post('storeTestimonials', [TestimonialController::class, 'store'])->name('storeTestimonials');

Route::get('editTestimonials/{id}', [TestimonialController::class, 'edit'])->name('editTestimonials');

Route::put('updateTestimonials/{id}',[TestimonialController::class,'update'])->name('updateTestimonials');


Route::get('destroyTestimonials/{id}',[TestimonialController::class,'destroy'])->name('destroyTestimonials');


///////////////////////////////////////////////////////

//Category


Route::get('categories', [CategoryController::class, 'index'])->name('categories');

Route::get('addCategory', [CategoryController::class, 'create'])->name('addCategory');
Route::post('storeCategory', [CategoryController::class, 'store'])->name('storeCategory');

Route::get('editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');

Route::put('updateCategory/{id}',[CategoryController::class,'update'])->name('updateCategory');


//Route::get('destroyCategory/{id}',[CategoryController::class,'destroy'])->name('destroyCategory');



Route::get('destroyCategory/{id}',[CategoryController::class,'deleteCategory'])->name('destroyCategory');





//Route::get('categoriesShow/{id}', [CategoryController::class, 'show'])->name('categoriesShow');

////////////////////////////////////////////////////////////////////////////////////////


/////Message



Route::get('conactMessages', [ContactController::class, 'contact'])->name('conactMessages');




//Route::post('showMessage', [ContactController::class, 'receiveContact'])->name('showMessage');


Route::get('showMessage/{id}',[ContactController::class,'show'])->name('showMessage1');



Route::get('messages', [ContactController::class, 'index'])->name('messages');


Route::get('deleteMessage/{id}',[ContactController::class,'destroy'])->name('deleteMessage');




////////////////////////////////////////////////////////////////////////////////////////

/////User




Route::get('loginPage', [AdminController::class, 'loginPage'])->name('loginPage');



Route::get('users', [AdminController::class, 'showUser'])->name('users');





Route::get('edituser/{id}', [AdminController::class, 'edituser'])->name('edituser');



Route::post('updateUser/{id}',[AdminController::class,'updateUser'])->name('updateUser');




////////////////////////////////////////////////////////////////////


// session






































//Route::get('edituser', [AdminController::class, 'edituser'])->name('edituser');




Route::get('addUser', [AdminController::class, 'addUser'])->name('addUser');


 //Route::get('messages', [AdminController::class, 'messages'])->name('messages');




// Route::get('showMessage', [AdminController::class, 'showMessage'])->name('showMessage');














//Route::get('users', [RegisterController::class, 'create'])->name('users');


//Route::get('users', [AdminController::class, 'users'])->name('users');


//Route::get('editTestimonials', [AdminController::class, 'editTestimonials'])->name('editTestimonials');



//Route::get('testimonials_admin', [AdminController::class, 'testimonials'])->name('testimonials_admin');





//Route::get('cars', [AdminController::class, 'cars'])->name('cars');






//Route::get('categories', [AdminController::class, 'categories'])->name('categories');



//Route::get('addCar', [AdminController::class, 'addCar'])->name('addCar');
    

    

//Route::get('addCategory', [AdminController::class, 'addCategory'])->name('addCategory');




Route::get('pages', [AdminController::class, 'pages'])->name('pages');







//Route::get('addTestimonials', [AdminController::class, 'addTestimonials'])->name('addTestimonials');



//Route::get('editCar', [AdminController::class, 'editCar'])->name('editCar');





//Route::get('editCategory', [AdminController::class, 'editCategory'])->name('editCategory');













// Route::prefix('admin')->group(function () {
    


//     Route::get('/addCar', [AdminController::class, 'addCar'])->name('addCar');
    
    

// Route::get('/addCategory', [AdminController::class, 'addCategory'])->name('addCategory');


// // Route::get('contact1', [CarRentalController::class, 'contact'])->name('contact');



// // Route::get('/addCategory1', [CarRentalController::class, 'addCategory'])->name('addCategory');









}



);







Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







   