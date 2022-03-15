<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');

    // Notices Routes
    Route::get('/notice', [AdminController::class,'notice'])->name('notice');
    Route::post('/savenotice', [AdminController::class,'saveNotice'])->name('savenotice');
    Route::get('/delnotice', [AdminController::class,'delNotice'])->name('delnotice');

    // Departments Routes
    Route::get('/department', [AdminController::class,'department'])->name('department');
    Route::post('/savedepartment', [AdminController::class,'saveDepartment'])->name('savedepartment');
    Route::get('/deldepartment', [AdminController::class,'delDepartment'])->name('deldepartment');

    // Teachers Routes
    Route::get('/addteacher', [AdminController::class,'addTeacher'])->name('addteacher');
    Route::post('/saveteacher', [AdminController::class,'saveTeacher'])->name('saveteacher');
    Route::get('/viewteacher', [AdminController::class,'viewTeacher'])->name('viewteacher');
    Route::get('/delteacher', [AdminController::class,'delTeacher'])->name('delteacher');

    // Non-Teachers Routes
    Route::get('/addnonteacher', [AdminController::class,'addNonTeacher'])->name('addnonteacher');
    Route::post('/savenonteacher', [AdminController::class,'saveNonTeacher'])->name('savenonteacher');
    Route::get('/viewnonteacher', [AdminController::class,'viewNonTeacher'])->name('viewnonteacher');
    Route::get('/delnonteacher', [AdminController::class,'delNonTeacher'])->name('delnonteacher');

    // Slider Routes
    Route::get('/slider', [AdminController::class,'slider'])->name('slider');
    Route::post('/saveslider', [AdminController::class,'saveSlider'])->name('saveslider');
    Route::get('/delslider', [AdminController::class,'delSlider'])->name('delslider');

    // Gallery Routes
    Route::get('/gallery', [AdminController::class,'gallery'])->name('gallery');
    Route::post('/savegallery', [AdminController::class,'saveGallery'])->name('savegallery');
    Route::get('/delgallery', [AdminController::class,'delGallery'])->name('delgallery');

    // Press Routes
    Route::get('/press', [AdminController::class,'press'])->name('press');
    Route::post('/savepress', [AdminController::class,'savePress'])->name('savepress');
    Route::get('/delpress', [AdminController::class,'delPress'])->name('delpress');

    // Academic Calendar Routes
    Route::get('/academiccalendar', [AdminController::class,'academicCalendar'])->name('academiccalendar');
    Route::post('/saveacademiccalendar', [AdminController::class,'saveAcademicCalendar'])->name('saveacademiccalendar');
    Route::get('/delacademiccalendar', [AdminController::class,'delAcademicCalendar'])->name('delacademiccalendar');

    // Timetable Routes
    Route::get('/timetable', [AdminController::class,'timetable'])->name('timetable');
    Route::post('/savetimetable', [AdminController::class,'saveTimetable'])->name('savetimetable');
    Route::get('/deltimetable', [AdminController::class,'delTimetable'])->name('deltimetable');

    // Fee-Structure Routes
    Route::get('/feestructure', [AdminController::class,'feeStructure'])->name('feestructure');
    Route::post('/savefeestructure', [AdminController::class,'saveFeeStructure'])->name('savefeestructure');
    Route::get('/delfeestructure', [AdminController::class,'delFeeStructure'])->name('delfeestructure');

    // Committee Routes
    Route::get('/committee', [AdminController::class,'committee'])->name('committee');
    Route::post('/savecommittee', [AdminController::class,'saveCommittee'])->name('savecommittee');
    Route::get('/delcommittee', [AdminController::class,'delCommittee'])->name('delcommittee');

    // Committee Members Routes
    Route::get('/comember', [AdminController::class,'comember'])->name('comember');
    Route::post('/savecomember', [AdminController::class,'saveCoMember'])->name('savecomember');
    Route::get('/delcomember', [AdminController::class,'delCoMember'])->name('delcomember');

    // AQAR Routes
    Route::get('/aqar', [AdminController::class,'aqar'])->name('aqar');
    Route::post('/saveaqar', [AdminController::class,'saveAqar'])->name('saveaqar');
    Route::get('/delaqar', [AdminController::class,'delAqar'])->name('delaqar');

    // SSR Routes
    Route::get('/ssr', [AdminController::class,'ssr'])->name('ssr');
    Route::post('/savessr', [AdminController::class,'saveSsr'])->name('savessr');
    Route::get('/delssr', [AdminController::class,'delSsr'])->name('delssr');

    // View Contacts Routes
    Route::get('/contact', [AdminController::class,'contact'])->name('contact');
    Route::get('/delcontact', [AdminController::class,'delContact'])->name('delcontact');
});

Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/about-college', [UserController::class,'aboutCollege'])->name('about-college');
Route::get('/vision-mission', [UserController::class,'visionMission'])->name('vision-mission');
// Route::get('/chancellor', [UserController::class,'chancellor'])->name('chancellor');
Route::get('/vice-chancellor-desk', [UserController::class,'viceChancellorDesk'])->name('vice-chancellor-desk');
Route::get('/pricipal-desk', [UserController::class,'pricnpalDesk'])->name('pricipal-desk');
Route::get('/college-achievments', [UserController::class,'collegeAchievments'])->name('college-achievments');

Route::get('/admission', [UserController::class,'admission'])->name('admission');
Route::get('/courses', [UserController::class,'courses'])->name('courses');
Route::get('/academic-calendar', [UserController::class,'academicCalendar'])->name('academic-calendar');
Route::get('/fee-structure', [UserController::class,'feeStructure'])->name('fee-structure');
Route::get('/teaching-staff', [UserController::class,'teachingStaff'])->name('teaching-staff');
Route::get('/non-teaching-staff', [UserController::class,'nonTeachingStaff'])->name('non-teaching-staff');
Route::get('/time-table', [UserController::class,'timeTable'])->name('time-table');
Route::get('/regualtion', [UserController::class,'regualtion'])->name('regualtion');
Route::get('/ncc', [UserController::class,'ncc'])->name('ncc');
Route::get('/nss', [UserController::class,'nss'])->name('nss');
Route::get('/canteen', [UserController::class,'canteen'])->name('canteen');
Route::get('/hostel', [UserController::class,'hostel'])->name('hostel');
Route::get('/internet', [UserController::class,'internet'])->name('internet');

Route::get('/science', [UserController::class,'science'])->name('science');
Route::get('/arts', [UserController::class,'arts'])->name('arts');

Route::get('/contact-us', [UserController::class,'contactUs'])->name('contact-us');
Route::post('/savecontact', [UserController::class,'saveContact'])->name('savecontact');

Route::get('/other-cell', [UserController::class,'otherCell'])->name('othercell');

