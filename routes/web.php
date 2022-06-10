<?php

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FineController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TimekeepingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Auth::routes(['register' => false]);



#middleware admin
Route::group(['middleware' => ['admin']], function () {
    #dashbroad
    Route::get('admin', [AdminController::class, 'View'])->name('admin');
    Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    #nhân sự
    Route::get('admin/user', [UsersController::class, 'index'])->name('admin.user');
    Route::get('admin/user/create', [UsersController::class, 'create'])->name('admin.user.create');
    Route::post('admin/user/store', [UsersController::class, 'store'])->name('admin.user.store');
    Route::get('admin/user/show/{id}', [UsersController::class, 'show'])->name('admin.user.show'); 
    Route::get('admin/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
    Route::get('admin/user/delete/{id}', [UsersController::class, 'destroy'])->name('admin.user.delete');


    #phòng ban
    Route::get('admin/departments', [DepartmentsController::class, 'index'])->name('admin.departments');

    #chấm công
    Route::get('admin/timekeeping', [TimekeepingController::class, 'index'])->name('admin.timekeeping');

    #lương
    Route::get('admin/salary', [SalaryController::class, 'index'])->name('admin.salary');

    #tiền thưởng
    Route::get('admin/bonus', [BonusController::class, 'index'])->name('admin.bonus');

    #tiền phạt
    Route::get('admin/fine', [FineController::class, 'index'])->name('admin.fine');

    #lịch làm việc
    Route::get('admin/calendar', [CalendarController::class, 'index'])->name('admin.calendar');

});


Route::get('calendar', [EventController::class, 'index'])->name('calendar.index');
Route::post('calendar/create', [EventController::class, 'create'])->name('calendar.create');
Route::patch('calendar/edit', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove', [EventController::class, 'destroy'])->name('calendar.destroy');

