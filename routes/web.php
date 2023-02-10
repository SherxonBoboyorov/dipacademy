<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdvisoryboardController;
use App\Http\Controllers\Admin\LeadershipController;
use App\Http\Controllers\Admin\StatementController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\MagistracyController;
use App\Http\Controllers\Admin\ProgrammesController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;


Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
         'slider' => SliderController::class,
         'page' => PageController::class,
         'advisoryboard' => AdvisoryboardController::class,
         'leadership' => LeadershipController::class,
         'statement' => StatementController::class,
         'department' => DepartmentController::class,
         'team' => TeamController::class,
         'faculty' => FacultyController::class,
         'photo' => PhotoController::class,
         'video' => VideoController::class,
         'vacancy' => VacancyController::class,
         'magistracy' => MagistracyController::class,
         'programmes' => ProgrammesController::class
     ]);
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
