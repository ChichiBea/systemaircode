<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Models\NewModel;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Models\ProfileModel;
use App\Http\Controllers\ProposalController;
use App\Http\Models\ProposalModel;
use App\Http\Controllers\ProposalsController;
use App\Http\Models\UserModel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Models\AboutUs;
use App\Http\Controllers\AnnouncementController;
use App\Http\Models\AnnouncementModel;



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


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/track', function () {
    return view('track');
});

Route::get('/draft', function () {
    return view('draft');
});

Route::get('/underevaluation', function () {
    return view('underevaluation');
});

Route::get('/test', function () {
    return view('aboutus');
});


// Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
// Route::get('/about-us/create', [AboutUsController::class, 'create'])->name('about-us.create');
// Route::post('/about-us', [AboutUsController::class, 'store'])->name('about-us.store');
// Route::get('/about-us/{id}', [AboutUsController::class, 'show'])->name('about-us.show');
// Route::get('/about-us/{id}/edit', [AboutUsController::class, 'edit'])->name('about-us.edit');
// Route::put('/about-us/{id}', [AboutUsController::class, 'update'])->name('about-us.update');
// Route::delete('/about-us/{id}', [AboutUsController::class, 'destroy'])->name('about-us.destroy');

//ANNOUNCEMENT  CRUD
Route::get('/announcement', [AnnouncementController::class,'index']);
Route::post('/announcement', [AnnouncementController::class, 'announcementinsert']);
Route::get('/announcementview', [AnnouncementController::class, 'announcementdisplay']);
Route::get('/announcementedit/{id}', [AnnouncementController::class, 'announcementedit']);
Route::put('/announcementedit/{id}', [AnnouncementController::class, 'announcementeditt']);
Route::get('/announcementdelete/{id}', [AnnouncementController::class, 'announcementdelete']);


//ABOUT US CRUD
Route::get('/aboutus', [AboutUsController::class,'index']);
Route::post('/aboutus', [AboutUsController::class, 'aboutusinsert']);
Route::get('/aboutusview', [AboutUsController::class, 'aboutusdisplay']);
Route::get('/aboutusedit/{id}', [AboutUsController::class, 'aboutusedit']);
Route::put('/aboutusedit/{id}', [AboutUsController::class, 'aboutuseditt']);
Route::get('/aboutusdelete/{id}', [AboutUsController::class, 'aboutusdelete']);

//PROFILE CRUD
Route::get('/profile', [ProfileController::class,'index']);
Route::post('/profile', [ProfileController::class,'profileinsert']);
Route::get('/profileview', [ProfileController::class, 'profiledisplay']);
Route::get('/profileedit/{id}', [ProfileController::class, 'profileedit']);
Route::put('/profileedit/{id}', [ProfileController::class, 'profileeditt']);
Route::get('/profiledelete/{id}', [ProfileController::class, 'profiledelete']);

//NEW CRUD
Route::get('/new', [NewController::class,'index']);
Route::post('/new', [NewController::class,'newinsert']);
Route::get('/newview', [NewController::class, 'newdisplay']);
Route::get('/newedit/{id}', [NewController::class, 'newedit']);
Route::put('/newedit/{id}', [NewController::class, 'neweditt']);
Route::get('/newdelete/{id}', [NewController::class, 'newdelete']);


//CALL FOR PROPOSAL CRUD
Route::get('/proposals', [ProposalsController::class, 'index']);
Route::post('/proposals', [ProposalsController::class,'proposalsinsert']);
Route::get('/propview', [ProposalsController::class, 'proposalsdisplay']);
Route::get('/propedit/{id}', [ProposalsController::class, 'proposalsedit']);
Route::put('/propedit/{id}', [ProposalsController::class, 'proposalseditt']);
Route::get('/propdelete/{id}', [ProposalsController::class, 'proposalsdelete']);


// Route::get('/register', [UserController::class, 'register']);
// Route::post('/register', [UserController::class, 'store']);
// Route::get('/login', [UserController::class, 'login']);
// Route::post('/login', [UserController::class, 'authenticate']);
  

