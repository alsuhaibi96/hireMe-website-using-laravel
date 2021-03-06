<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QualificationController;




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


/**
 * get and display views routes (website views)
 */
Route::get('/', [HomeController::class,'index']);
Route::get('/our_services', [HomeController::class,'viewOurServices']);
Route::get('/login', [UsersController::class,'index']);
Route::get('/register',[UsersController::class,'viewRegister']);
Route::get('/jobs', [JobsController::class,'index']);
Route::get('/job_details', [JobDetailsController::class,'index']);
Route::get('/about_us',[AboutUsController::class,'index']);
Route::get('/contact_us',[ContactUsController::class,'index']);


/**
 * Display profile views routes (profile views)
 */

Route::get('/profile', [ProfileController::class,'index']);
Route::get('/qualifications', [QualificationController::class,'index']);
Route::get('/courses', [CourseController::class,'index']);
Route::get('/experiences', [ExperienceController::class,'index']);
Route::get('/skills', [SkillController::class,'index']);





