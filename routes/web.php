<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\ManagementInfoController;
use App\Http\Controllers\SubCommitteeController;
use App\Http\Controllers\BranchCommitteeController;
use App\Http\Controllers\ApplicantController;

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
Route::get('/', [FrontController::class,'index'])->name('landingPage');
// Route::get('/', function () {
//     return view('welcome');
// })->name('landingPage');

Auth::routes();

Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('payment-gateway', [RegistrationController::class, 'store'])->name('register.store');
Route::get('/registerCategory', [RegistrationController::class, 'registerCategory']);
Route::get('success-url', [RegistrationController::class, 'verifyPayment']);
Route::get('payment-fail', [RegistrationController::class, 'verifyPaymentfail']);
//manual reg
Route::get('/registration', [RegistrationController::class, 'manualReg'])->name('manualReg');
Route::get('/registration/create', [RegistrationController::class, 'manualReg'])->name('manualRegCreate');
Route::post('/registration/store', [RegistrationController::class, 'manualRegStore'])->name('manualRegStore');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/committee', [FrontController::class, 'maincommiteeview'])->name('main.com.view');
// Route::get('/sub_commitee', [FrontController::class, 'subcommiteeview'])->name('sub.com.view');
// Route::get('/branch_commitee', [FrontController::class, 'branchcommiteeview'])->name('branch.com.view');



//dashboard
Route::get('/basic-info', [BasicController::class, 'index'])->name('basic-info.index');
Route::post('/basic-info/logo', [BasicController::class, 'logostore'])->name('basic-info.logo');
Route::delete('/basic-info/logo/{id}',[BasicController::class,'logodestroy'])->name('basic-info.logodelete');

Route::post('/basic-info/slider', [BasicController::class, 'sliderstore'])->name('basic-info.slider');
Route::delete('/basic-info/slider/{id}',[BasicController::class,'sliderdestroy'])->name('basic-info.sliderdelete');

Route::post('/basic-info/about', [BasicController::class, 'aboutstore'])->name('basic-info.about');
Route::delete('/basic-info/about/{id}',[BasicController::class,'aboutdestroy'])->name('basic-info.aboutdelete');

Route::post('/basic-info/gallery', [BasicController::class, 'gallerystore'])->name('basic-info.gallery');
Route::delete('/basic-info/gallery/{id}',[BasicController::class,'gallerydestroy'])->name('basic-info.gallerydelete');


//sponsor
Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor.index');
Route::get('/sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create');
Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');
Route::get('/sponsor/edit/{id}',[SponsorController::class,'edit'])->name('sponsor.edit');
Route::post('/sponsor/update/{id}',[SponsorController::class,'update'])->name('sponsor.update');
Route::delete('/sponsor/delete/{id}',[SponsorController::class,'destroy'])->name('sponsor.destroy');

//main committe
Route::get('/main-committe', [ManagementInfoController::class, 'index'])->name('main-committe.index');
Route::get('/main-committe/create', [ManagementInfoController::class, 'create'])->name('main-committe.create');
Route::post('/main-committe/store', [ManagementInfoController::class, 'store'])->name('main-committe.store');
Route::get('/main-committe/edit/{id}',[ManagementInfoController::class,'edit'])->name('main-committe.edit');
Route::post('/main-committe/update/{id}',[ManagementInfoController::class,'update'])->name('main-committe.update');
Route::delete('/main-committe/delete/{id}',[ManagementInfoController::class,'destroy'])->name('main-committe.destroy');

//sub committee
Route::get('/sub-committe', [SubCommitteeController::class, 'index'])->name('sub-committe.index');
Route::get('/sub-committe/create', [SubCommitteeController::class, 'create'])->name('sub-committe.create');
Route::post('/sub-committe/store', [SubCommitteeController::class, 'store'])->name('sub-committe.store');
Route::get('/sub-committe/edit/{id}',[SubCommitteeController::class,'edit'])->name('sub-committe.edit');
Route::post('/sub-committe/update/{id}',[SubCommitteeController::class,'update'])->name('sub-committe.update');
Route::delete('/sub-committe/delete/{id}',[SubCommitteeController::class,'destroy'])->name('sub-committe.destroy');

//branch committee

Route::get('/branch-committe', [BranchCommitteeController::class, 'index'])->name('branch-committe.index');
Route::get('/branch-committe/create', [BranchCommitteeController::class, 'create'])->name('branch-committe.create');
Route::post('/branch-committe/store', [BranchCommitteeController::class, 'store'])->name('branch-committe.store');
Route::get('/branch-committe/edit/{id}',[BranchCommitteeController::class,'edit'])->name('branch-committe.edit');
Route::post('/branch-committe/update/{id}',[BranchCommitteeController::class,'update'])->name('branch-committe.update');
Route::delete('/branch-committe/delete/{id}',[BranchCommitteeController::class,'destroy'])->name('branch-committe.destroy');

// Applicant Info
Route::get('/applicant-info', [ApplicantController::class, 'index'])->name('applicant.index');
Route::get('/applicant-list', [ApplicantController::class, 'applicant'])->name('applicantlist.index');

