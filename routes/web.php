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
use App\Http\Controllers\Admin\ProgrammesInController;
use App\Http\Controllers\Admin\ProgrammesMasterController;
use App\Http\Controllers\Admin\ProgrammesMasterInController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\AdmissionInController;
use App\Http\Controllers\Admin\AdmissionMasterController;
use App\Http\Controllers\Admin\AdmissionMasterInController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\WhyDipAcademyController;
use App\Http\Controllers\Admin\OurPartnerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TenderController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;

// front

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AdvisoryController;
use App\Http\Controllers\Front\LeaderController;
use App\Http\Controllers\Front\NormsStatementController;
use App\Http\Controllers\Front\DepartmentsStaffController;
use App\Http\Controllers\Front\CommandController;
use App\Http\Controllers\Front\PhotoGalleryController;
use App\Http\Controllers\Front\VideoGalleryController;
use App\Http\Controllers\Front\JobVacancyController;
use App\Http\Controllers\Front\EReceptionController;
use App\Http\Controllers\Front\FacultyDiplomacyController;
use App\Http\Controllers\Front\ProgrammerController;
use App\Http\Controllers\Front\ResearcController;
use App\Http\Controllers\Front\InternationController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\TeenderController;
use App\Http\Controllers\Front\ProgramMasterController;
use App\Http\Controllers\Front\AdmisionController;
use App\Http\Controllers\Front\AdmisionmasterController;


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
         'programmes' => ProgrammesController::class,
         'programmesin' => ProgrammesInController::class,
         'programmaster' => ProgrammesMasterController::class,
         'programmesmasterin' => ProgrammesMasterInController::class,
         'admission' => AdmissionController::class,
         'admissionin' => AdmissionInController::class,
         'admissionmaster' => AdmissionMasterController::class,
         'admissionmasterin' => AdmissionMasterInController::class,
         'options' => OptionsController::class,
         'research' => ResearchController::class,
         'international' => InternationalController::class,
         'whydipacademy' => WhyDipAcademyController::class,
         'ourpartner' => OurPartnerController::class,
         'category' => CategoryController::class,
         'article' => ArticleController::class,
         'tender' => TenderController::class

     ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'hompage'])->name('/');
        Route::get('about', [AboutController::class, 'about'])->name('about');
        Route::get('advisory', [AdvisoryController::class, 'advisory'])->name('advisory');
        Route::get('leadership', [LeaderController::class, 'leadership'])->name('leadership');
        Route::get('normsStatements', [NormsStatementController::class, 'normsStatements'])->name('normsStatements');
        Route::get('departmentsStaffs', [DepartmentsStaffController::class, 'list'])->name('departmentsStaffs');
        Route::get('departmentsStaffs/{slug}', [DepartmentsStaffController::class, 'show'])->name('departmentsStaff');
        Route::get('team/{slug}', [CommandController::class, 'team'])->name('team');
        Route::get('photogallerys', [PhotoGalleryController::class, 'list'])->name('photogallerys');
        Route::get('photogallerys/{slug}', [PhotoGalleryController::class, 'show'])->name('photogallery');
        Route::get('videoGallery', [VideoGalleryController::class, 'videoGallery'])->name('videoGallery');
        Route::get('jobVacancy', [JobVacancyController::class, 'jobVacancy'])->name('jobVacancy');
        Route::get('E_reception', [EReceptionController::class, 'E_reception'])->name('E_reception');
        Route::post('save_quotecallbackSave', [EReceptionController::class, 'quotecallbackSave'])->name('quotecallbackSave');
        Route::get('faculty', [FacultyDiplomacyController::class, 'faculty'])->name('faculty');
        Route::get('programmes', [ProgrammerController::class, 'programmes'])->name('programmes');
        Route::get('programmesins/{slug}', [ProgrammerController::class, 'show'])->name('programmesin');
        Route::get('research', [ResearcController::class, 'research'])->name('research');
        Route::get('international', [InternationController::class, 'international'])->name('international');
        Route::get('contacts', [ContactController::class, 'contacts'])->name('contacts');
        Route::post('save_callback', [ContactController::class, 'saveCallback'])->name('saveCallback');
        Route::get('articles', [NewsController::class, 'list'])->name('articles');
        Route::get('articles/{slug}', [NewsController::class, 'show'])->name('article');
        Route::get('tenders', [TeenderController::class, 'list'])->name('tenders');
        Route::get('tenders/{slug}', [TeenderController::class, 'show'])->name('tender');
        Route::get('programmesmasters', [ProgramMasterController::class, 'programmesmasters'])->name('programmesmasters');
        Route::get('programmesmasterins/{id}', [ProgramMasterController::class, 'show'])->name('programmesmasterin');
        Route::get('admissions', [AdmisionController::class, 'admissions'])->name('admissions');
        Route::get('admissionins/{slug}', [AdmisionController::class, 'show'])->name('admissionin');
        Route::get('admissionmasters', [AdmisionmasterController::class, 'admissionmasters'])->name('admissionmasters');
        Route::get('admissionmasterins/{id}', [AdmisionmasterController::class, 'show'])->name('admissionmasterin');




 });


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
