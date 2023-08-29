<?php

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

// Route::get('/', function () {        return view('welcome');})->name('/');
// Route::get('/', function () {        return view('front.master');});
Route::get('/', function () {        return view('front.master');})->name('/');
// Route::get('/blog', function () {    return view('front.course.single');});
Route::get('/blog', function () {    return view('front.course.single');})->name('blog');
Route::get('/product', function () {   return view('front.products.product');})->name('product');
Route::get('/course', function () {    return view('front.course.course');})->name('course');
Route::get('/course', function () {    return view('front.course.course');})->name('course');

Route::get('single_course/{course_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'single_course'])->name('single_course');

Auth::routes();
// profile
Route::get('profiler', [App\Http\Controllers\Frontend\ProfileController::class, 'profile'])->name('profiler');
// Common

// Booking Course
Route::post('bookcourse', [App\Http\Controllers\BookingController::class, 'bookcourse'])->name('bookcourse');
// Buy Course

Route::post('buycourse', [App\Http\Controllers\Frontend\CourseController::class, 'buycourse'])->name('buycourse');

// Change Password
Route::post('updatePassword', [App\Http\Controllers\Auth\ChangePassController::class, 'updatePassword'])->name('updatePassword');
Route::get('profile', [App\Http\Controllers\Admin\AdminController::class, 'profile'])->name('profile');

// Course
Route::get('courseadmin', [App\Http\Controllers\Course\CourseController::class, 'courseadmin'])->name('courseadmin');
Route::get('addcourse', [App\Http\Controllers\Course\CourseController::class, 'addcourse'])->name('addcourse');
Route::post('addcourse', [App\Http\Controllers\Course\CourseController::class, 'newcourse'])->name('addcourse');

// Category
Route::post('category', [App\Http\Controllers\Course\CourseController::class, 'category'])->name('category');
Route::post('subcategory', [App\Http\Controllers\Course\CourseController::class, 'subcategory'])->name('subcategory');

// Products
Route::get('products', [App\Http\Controllers\Product\ProductController::class, 'products'])->name('products');
Route::get('newproducts', [App\Http\Controllers\Product\ProductController::class, 'newproducts'])->name('newproducts');
Route::post('newproducts', [App\Http\Controllers\Product\ProductController::class, 'addproducts'])->name('newproducts');
// Category
Route::post('product_category', [App\Http\Controllers\Product\ProductController::class, 'product_category'])->name('product_category');
Route::post('product_subcategory', [App\Http\Controllers\Product\ProductController::class, 'product_subcategory'])->name('product_subcategory');
Route::post('product_Dealer', [App\Http\Controllers\Product\ProductController::class, 'product_Dealer'])->name('product_Dealer');
Route::post('product_brands', [App\Http\Controllers\Product\ProductController::class, 'product_brands'])->name('product_brands');

// Admin
Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
Route::get('affiliate', [App\Http\Controllers\Admin\AdminController::class, 'affiliate'])->name('affiliate');

Route::get('manager_roles', [App\Http\Controllers\Admin\AdminController::class, 'manager_roles'])->name('manager_roles');
Route::get('ads_roles', [App\Http\Controllers\Admin\AdminController::class, 'ads_roles'])->name('ads_roles');
Route::get('tutor_roles', [App\Http\Controllers\Admin\AdminController::class, 'tutor_roles'])->name('tutor_roles');
// Route::get('manager_roles', [App\Http\Controllers\Admin\AdminController::class, 'manager_roles'])->name('manager_roles');
Route::post('manager_roles', [App\Http\Controllers\Admin\AdminController::class, 'add_manager_role'])->name('manager_roles');

Route::post('profile_edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_profile'])->name('profile_edit');

