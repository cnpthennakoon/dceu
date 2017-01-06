<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::post('store', 'Registration@store');


Route::group(['middleware'=>'web'], function (){

    Route::resource('registration_form', 'Registration@create');

});


Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'IndexAdminController@index', function(){


            return  view('admin.index');

    });

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/notices', 'AdminNoticesController');

    Route::resource('admin/mainSubjects', 'AdminMainSubjectsController');

    Route::resource('admin/subSubjects', 'AdminSubSubjectsController');

    Route::resource('admin/regionalCenters', 'AdminRegionalCenterController');

    Route::get('admin/charts/piechart',array('as'=>'piechart','uses'=>'ChartsController@pieChart'));
});

Route::group(['middleware'=>'dataEntry'], function(){

    Route::get('/dataEntry' , 'IndexDataEntryController@index', function(){

        return  view('dataEntry.index');

    });

    Route::resource('admin/select', 'SelectStudentsController');

    Route::resource('admin/notices', 'AdminNoticesController');

    Route::get('/clerk/results/import_results', ['as' =>'import_results', 'uses' => 'ResultsExcelController@getImport']);
    Route::post('/clerk/results/import_results', ['as' =>'import_results', 'uses' => 'ResultsExcelController@postImport']);

    Route::resource('/dataEntry/examRegister', 'ClerkExamRegisterController');
    Route::post('/dataEntry/examRegister', 'ClerkExamRegisterController@store');
    Route::post('/dataEntry/examregisterCancel', 'ClerkExamRegisterController@destroy');
    Route::get('/dataEntryStudentSubject/{id}', 'ClerkExamRegisterController@show');
    Route::resource('dataEntry/alsubjects/add_alsubjects', 'AlSubjectController');
    Route::resource('dataEntry/closingDate/index', 'ClosingDateController');

    Route::resource('dataEntry/registrationFormStat', 'regFormStat');

});

Route::group(['middleware'=>'student'], function(){

    Route::get('/student', 'IndexStudentController@index', function(){

        return  view('student.index');

    });

    Route::resource('/student/results', 'StudentResultsController');
    Route::resource('/student/gpa', 'StudentGPAController');
    Route::resource('/student/subjects', 'StudentsSubjectsContrller');
    Route::resource('/student/sub_subjects', 'StudentSubSubjectsController');
    Route::resource('student/profile', 'StudentProfileController');
    Route::resource('/student/registrations', 'StudentRegistrationsController');
//    Route::post('/student/examregister', 'StudentExamRegistrationController@store');
    Route::post('/student/examregister', 'StudentExamRegistrationController@store');
    Route::post('/student/examregisterCancel', 'StudentExamRegistrationController@destroy');

    Route::resource('student/pdfReg', 'StudentRegistrationVoucherController');
    Route::resource('student/pdfAdm', 'StudentExamAdmissionController');


});
Route::get('pdf',function(){

    // $users=App\User::all();

    $pdf=PDF::loadView('voucher');
    return $pdf->download('voucher.pdf');
});


Route::get('admissions',function(){

    // $users=App\User::all();

    $pdf1=PDF::loadView('admission');
    return $pdf1->download('admission.pdf');
});

Route::get('/addDate', function() {

    return view('dataEntry/closingDate/index');
});


Route::group(['middleware'=>'lecturer'], function(){

    Route::get('/lecturer', function(){

        return  view('lecturer.index');

    });

});


Route::resource('student/notice', 'ShowNotices@index');

Route::get('registration_form', 'Registration@index');
Route::get('registration_close', 'Registration@index');
