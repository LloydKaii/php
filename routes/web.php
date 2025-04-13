<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\homeController;
use App\Http\Controllers\coach\homecoachController;
use App\Http\Controllers\admin\homeadminController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\coach\excerciseController;
use App\Http\Controllers\authController;
use App\Http\Middleware\checkRoleAdmin;
use App\Http\Middleware\checkRoleUser;
use App\Http\Middleware\checkRoleCoach;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RedirectIfNotAuthenticated;

//guest can access
Route::get('/', [homeController::class, 'index']);
Route::get('/home', [homeController::class, 'index']);
Route::get('/about-us', [homeController::class, 'about']);
Route::get('/excatelist', [homeController::class, 'excatelist']);
Route::get('/coachlist', [homeController::class, 'coachlist']);
Route::get('/exlistbycate/{id}', [homeController::class, 'exlistbycate']);
Route::get('/exdetail/{id}', [homeController::class, 'exdetail']);
Route::get('/profile/{id}', [homeController::class, 'profile']);
Route::post('/search', [homeController::class, 'search']);
Route::get('/to-package', [homeController::class, 'toPackage']);





//cant access after login

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/register', [authController::class, 'register_']);
    Route::get('/coachregister', [authController::class, 'coachregister_']);
    Route::post('/register', [authController::class, 'register']);
    Route::post('/coachregister', [authController::class, 'coachregister']);
    Route::get('/login', [authController::class, 'login_']);
    Route::post('/login', [authController::class, 'login']);
    });



//only access after login
Route::get('/logout', [authController::class, 'logout'])->middleware([RedirectIfNotAuthenticated::class]);
Route::get('/check-out-package/{id}', [homeController::class, 'checkOutPackage'])->middleware([RedirectIfNotAuthenticated::class]);
Route::post('/check-out-package/{id}', [homeController::class, 'checkOutPackage_'])->middleware([RedirectIfNotAuthenticated::class]);




//only member access
Route::middleware([checkRoleUser::class])->group(function () {
    Route::get('/urex', [homeController::class, 'urex']);
    Route::get('/user/profile', [homeController::class, 'urprofile']);
    Route::post('/user/profile', [homeController::class, 'updateProfile']);
    Route::get('/regisex/{id}', [homeController::class, 'regisex']);
    Route::get('/delurex/{id}', [homeController::class, 'delurex']);
    });



//only coach access
Route::prefix('coach')->middleware([checkRoleCoach::class])->group(function () {
    Route::get('/', [homecoachController::class, 'index']);
    Route::get('/home', [homecoachController::class, 'index']);
    Route::get('/profile', [homecoachController::class, 'profile']);
    Route::post('/profile', [homecoachController::class, 'updateProfile']);
    Route::get('/addex', [excerciseController::class, 'create']);
    Route::post('/addex', [excerciseController::class, 'store']);
    Route::get('/updateex/{id}', [excerciseController::class, 'update_']);
    Route::post('/updateex/{id}', [excerciseController::class, 'update']);
    Route::get('/delete/{id}', [excerciseController::class, 'destroy']);
    Route::get('/restore/{id}', [excerciseController::class, 'restore']);
    Route::post('/updatedetail/{id}', [excerciseController::class, 'updateDetail']);
    Route::get('/deldetail/{id}', [excerciseController::class, 'destroyDetail']);
    Route::get('/redetail/{id}', [excerciseController::class, 'restoreDetail']);
    Route::post('/addexdetail/{id}', [excerciseController::class, 'addexdetail']);
    });


//only admin access
    Route::middleware([checkRoleAdmin::class])->prefix('admin')->group(function () {
        Route::get('/', [homeadminController::class, 'index']);
        Route::get('/home', [homeadminController::class, 'index']);
        Route::get('/user', [userController::class, 'index']);
        Route::get('/coach', [userController::class, 'index1']);
        Route::get('/addcate', [categoryController::class, 'create']);
        Route::post('/addcate', [categoryController::class, 'store']);
        Route::get('/delete/{id}', [categoryController::class, 'destroy']);
        Route::get('/restore/{id}', [categoryController::class, 'restore']);
        Route::get('/updatecate/{id}', [categoryController::class, 'update_']);
        Route::post('/updatecate/{id}', [categoryController::class, 'update']);
        Route::get('/deluser/{id}', [userController::class, 'destroy']);
        Route::get('/reuser/{id}', [userController::class, 'restore']);
        Route::get('/profile-user/{id}', [homeadminController::class, 'profileUser']);
        Route::get('/profile-coach/{id}', [homeadminController::class, 'profileCoach']);
        Route::get('/exdetail/{id}', [homeadminController::class, 'exdetail']);
    });