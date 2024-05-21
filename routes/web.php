<?php

use App\Http\Controllers\enrollController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\enrollSubjectController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\userController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\chairmanController;
use Illuminate\Support\Facades\Route;

Route::get('/',
    [enrollController::class, 'home']
) -> name('home');

Route::get('/enroll',
    [enrollController::class, 'enrollform']
);

Route::post('/enroll',
    [enrollController::class, 'store']
) -> name('enroll.student');

Route::get('/students',
    [enrollController::class, 'students']
) -> name('students');

Route::get('/aboutus',
    [enrollController::class, 'aboutus']
);

// Students list
Route::get('/students_display',
    [enrollController::class, 'displayStudents']
);

// Add teacher
Route::get('/addteachers',
    [teacherController::class, 'addteacherform']
);

// Only displayable on the menu
Route::get('/teacher_display',
    [teacherController::class, 'displayteachers']
);

Route::post('/teachers',
    [teacherController::class, 'teacherStore']
) -> name('teacherinfo.store');

// Currently not available to access via website, should be only accessed to the chairman [1]
Route::get('/addsubject',
    [subjectController::class, 'addSubject']
);

// Use this to display the contents from the 'teacherinfo' database via teacherModel
Route::get('/addsubject',
    [SubjectController::class, 'displaySubjectTeacher']
);

// [1] This one as well
Route::post('/subjects',
    [subjectController::class, 'subjectStore']
) -> name('subjects.store');

Route::get('/subjectlist',
    [SubjectController::class, 'displaySubject']
) -> name('subjects.listing');

Route::get('/login',
    [userController::class, 'login']
);

// Student registration
Route::post('/register',
    [userController::class, 'store']
)->name('registration.submit');

Route::get('/registerstudent_form',
    [UserController::class, 'createstudent']
)->name('registration.create');

Route::get('/getStudentInfo/{studentId}',
    [UserController::class, 'getStudentInfo']
)->name('getStudentInfo');

// Teacher registration
Route::get('/registerteacher_form',
    [UserController::class, 'createteacher']
)->name('registration.createTeacher');

Route::post('/registerteacher',
    [userController::class, 'storeTeacher']
)->name('teacherregistration.submit');

Route::get('/getTeacherInfo/{teacherId}',
    [UserController::class, 'getTeacherInfo']
)->name('getTeacherInfo');

// Profile routes
Route::get('/profile',
    [profileController::class, 'displayProfile']
);

// Chairman admin home page
Route::get('/chairman_home',
    [chairmanController::class, 'home']
)->name('chairman.home');

// Edit Student routes
Route::get('/edit_student',
    [chairmanController::class, 'editstudent']
);

Route::get('/edit_student',
    [chairmanController::class, 'index']
)->name('edit_student.index');

Route::get('/edit_student/{id}/edit',
    [chairmanController::class, 'edit']
)->name('studinfo.edit');

Route::put('/edit_student/{id}',
    [chairmanController::class, 'update']
)->name('studinfo.update');

Route::delete('/edit_student/{id}',
    [chairmanController::class, 'destroy']
)->name('studinfo.destroy');

// Edit Teacher routes
Route::get('/edit_teacher',
    [chairmanController::class, 'editteacher']
);

Route::get('/edit_teacher',
    [chairmanController::class, 'teacherindex']
)->name('edit_teacher.index');

Route::get('/edit_teacher/{id}/edit',
    [chairmanController::class, 'teacheredit']
)->name('teacherinfo.edit');

Route::put('/edit_teacher/{id}',
    [chairmanController::class, 'teacherupdate']
)->name('teacherinfo.update');

Route::delete('/edit_teacher/{id}',
    [chairmanController::class, 'teacherdestroy']
)->name('teacherinfo.destroy');

// Edit Subject routes
Route::get('/edit_subject',
    [chairmanController::class, 'editsubject']
);

Route::get('/edit_subject',
    [chairmanController::class, 'subjectindex']
)->name('edit_subject.index');

Route::get('/edit_subject/{id}/edit',
    [chairmanController::class, 'subjectedit']
)->name('subjectinfo.edit');

Route::put('/edit_subject/{id}',
    [chairmanController::class, 'subjectupdate']
)->name('subjectinfo.update');

Route::delete('/edit_subject/{id}',
    [chairmanController::class, 'subjectdestroy']
)->name('subjectinfo.destroy');

// Enroll subject routes
Route::get('/enrollsubject',
    [enrollSubjectController::class, 'enrollpage']
)->name('enrollpage');

Route::post('/enrollsubject',
    [enrollSubjectController::class, 'enroll']
)->name('enroll');

// Display the enrolled subjects on the student list
Route::get('/students',
    [enrollSubjectController::class, 'displayStudents']
)->name('students_display');













