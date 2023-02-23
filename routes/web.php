<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ChartController;
use App\Http\Controllers\backend\CommentController;
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
use App\Http\Controllers\backend\OfferController;

use App\Http\Controllers\frontend\Home;
use App\Http\Controllers\frontend\BlogController as BlogFront;
use App\Http\Controllers\frontend\AboutController as AboutFront;
use App\Http\Controllers\frontend\ContactController as ContactFront;
use App\Http\Controllers\frontend\PortfolioController as PortfolioFront;
use App\Http\Controllers\frontend\ServiceController as ServiceFront;
use App\Http\Controllers\frontend\TeamController as TeamFront;
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
    Route::resource('about',AboutController::class);
    Route::resource('admin',AdminController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('chart',ChartController::class);
    Route::resource('comment',CommentController::class);
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
    Route::resource('offer',OfferController::class);
});

// ---------------------------------------------------------------------------------------------------------------------------
//              FRONT
// ---------------------------------------------------------------------------------------------------------------------------

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('blogs', [BlogFront::class, 'index'])->name('front.blogs');
Route::get('blog/{slug}', [BlogFront::class, 'show'])->name('front.blog.detail');
Route::get('about', [AboutFront::class, 'index'])->name('front.about');
Route::get('about/{slug}', [AboutFront::class, 'show'])->name('front.about.detail');
Route::get('contact', [ContactFront::class, 'index'])->name('front.contact');
Route::get('portfolio', [PortfolioFront::class, 'index'])->name('front.portfolio');
Route::get('service', [ServiceFront::class, 'index'])->name('front.service');
Route::get('service/{slug}', [ServiceFront::class, 'show'])->name('front.service.detail');
Route::get('team', [TeamFront::class, 'index'])->name('front.team');
Route::get('team/{slug}', [TeamFront::class, 'show'])->name('front.team.detail');



require __DIR__ . '/auth.php';
