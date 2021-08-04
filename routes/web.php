<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BuyTicketController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CreatedCalendarController;
use App\Http\Controllers\Edit2Controller;
use App\Http\Controllers\EditController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InForEventController;
use App\Http\Controllers\ThongTinVeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 

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
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/payments', function () {
    return view('payments');
});

Route::get('home', [HomeController::class, 'index']);

Route::get('newevent', [EventController::class, 'getThem']);
Route::post('newevent', [EventController::class, 'postThem'])->name('newevent');

Route::post('/upload', 'admin\UserController@uploadAvatar');
Route::post('/upload', 'admin\UserController@uploadProfile');

Route::get('events.edit/{id}', [EditController::class, 'getEvents'])->name('getevent');
Route::post('events.edit/{id}', [EditController::class, 'UploadEdit'])->name('editevent');

Route::get('events.edit2/{id}', [Edit2Controller::class, 'getEvents2'])->name('getevent2');
Route::post('events.edit2/{id}', [Edit2Controller::class, 'UploadEdit2'])->name('editevent');

Route::get('events.inforevent/{id}', [InForEventController::class, 'InforEvents'])->name('inforevent');
Route::get('events.buy/{id}', [BuyTicketController::class, 'BuyTicket'])->name('buy');

Route::get('events.calendar/{id}', [CalendarController::class, 'CalendarEvent'])->name('calendar');
Route::get('events.createcalendar/{id}', [CreatedCalendarController::class, 'CreateCalendarEvent'])->name('crecalendar');


Route::post('events.inforevent/{id}', [ThongTinVeController::class, 'postThemSoLuong']);

Route::get('features', [FeaturesController::class, 'FeaturesEvents'])->name('features');


// Route::resource('newevent', 'CKEditorController');

Auth::routes();

Route::get('/welcome', [WellcomeController::class, 'WellComePage'])->name('event');
Route::get('/', 'WellcomeController@WellComePage');



