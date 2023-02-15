<?php

use App\Http\Controllers\backend\About;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\Contact;
use App\Http\Controllers\backend\CustomerReviewController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\IntentionController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\SectionController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\Video;
use App\Http\Controllers\frontend\Blog as BlogFront;
use App\Http\Controllers\frontend\Home;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('backend.dashboard');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('admin',AdminController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('setting',SettingController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('review',CustomerReviewController::class);
    Route::resource('faq',FaqController::class);
    Route::resource('intention',IntentionController::class);
    Route::resource('portfolio',PortfolioController::class);
    Route::resource('section',SectionController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('team',TeamController::class);

    Route::get('about', [About::class, 'index'])->name('about');
    Route::get('video', [Video::class, 'index'])->name('video');
    Route::get('contact', [Contact::class, 'index'])->name('contact');
});

// ---------------------------------------------------------------------------------------------------------------------------
//              FRONT
// ---------------------------------------------------------------------------------------------------------------------------

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/blogs', [BlogFront::class, 'index'])->name('front.blogs');
Route::get('about', [\App\Http\Controllers\frontend\About::class, 'index'])->name('front.about');
Route::get('/contact', [\App\Http\Controllers\frontend\Contact::class, 'index'])->name('front.contact');
Route::get('/portfolio', [\App\Http\Controllers\frontend\Portfolio::class, 'index'])->name('front.portfolio');
Route::get('/service', [\App\Http\Controllers\frontend\Service::class, 'index'])->name('front.service');
Route::get('/team', [\App\Http\Controllers\frontend\Team::class, 'index'])->name('front.team');



require __DIR__ . '/auth.php';
