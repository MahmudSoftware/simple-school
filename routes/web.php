<?php

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
    return redirect(route('login'));
})->name('/');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/************** Student ****************/
Route::get('/StudentCreate', 'StudentController@StudentCreate');
Route::post('/SaveStudent', 'StudentController@StudentSave');
Route::get('/StudentList', 'StudentController@StudentList');
Route::get('/AllStudentList', 'StudentController@AllStudentList');
Route::get('/DeleteStudent/{id}', 'StudentController@DeleteStudent');


/************** Student List ****************/

Route::get('/PlayA', 'StudentListController@PlayA');
Route::get('/PlayB', 'StudentListController@PlayB');
Route::get('/NuA', 'StudentListController@NuA');
Route::get('/NuB', 'StudentListController@NuB');
Route::get('/KgA', 'StudentListController@KgA');
Route::get('/KgB', 'StudentListController@KgB');
Route::get('/OneA', 'StudentListController@OneA');
Route::get('/OneB', 'StudentListController@OneB');
Route::get('/TwoA', 'StudentListController@TwoA');
Route::get('/TwoB', 'StudentListController@TwoB');
Route::get('/ThreeA', 'StudentListController@ThreeA');
Route::get('/ThreeB', 'StudentListController@ThreeB');
Route::get('/FourA', 'StudentListController@FourA');
Route::get('/FourB', 'StudentListController@FourB');
Route::get('/FiveA', 'StudentListController@FiveA');
Route::get('/FiveB', 'StudentListController@FiveB');

/************** Student Salary ****************/
Route::get('/StudentSalary', 'SalaryController@StudentSalary');
Route::get('/StudentSalary', 'SalaryController@StudentSalary');
Route::get('/StudentSalary', 'SalaryController@StudentSalary');
Route::get('/StudentSalary', 'SalaryController@StudentSalary');
Route::get('/ViewStudentSalaryList', 'SalaryController@ViewStudentSalaryList');

/************** Student Salary  List****************/

Route::get('/PlayASalary', 'SalaryController@PlayASalary');
Route::get('/PlayAPaySalaryPrint/{id}', 'SalaryController@PlayAPaySalaryPrint');
Route::post('/SavePlayASalary', 'SalaryController@SavePlayASalary');
Route::get('/PlayAPaySalary/{id}', 'SalaryController@PlayAPaySalary');
Route::get('/PlayAPaySalaryDelete/{id}', 'SalaryController@PlayAPaySalaryDelete');
Route::get('/PlayAsList', 'SalaryListController@PlayAsList');



Route::get('/PlayBSalary', 'PlayBController@PlayBSalary');
Route::get('/PlayBPaySalary/{id}', 'PlayBController@PlayBPaySalary');
Route::post('/SavePlayBSalary', 'PlayBController@SavePlayBSalary');
Route::get('/PlayBsList', 'PlayBController@PlayBsList');
Route::get('/PlayBPaySalaryPrint/{id}', 'PlayBController@PlayBPaySalaryPrint');
Route::get('/PlayBPaySalaryDelete/{id}', 'PlayBController@PlayBPaySalaryDelete');


Route::get('/NuASalary', 'NursaryController@NuASalary');
Route::get('/NurAPaySalary/{id}', 'NursaryController@NurAPaySalary');
Route::post('/SaveNusaryASalary', 'NursaryController@SaveNusaryASalary');
Route::get('/NuAsList', 'NursaryController@NuAsList');
Route::get('/NuasalarySalaryPrint/{id}', 'NursaryController@NuasalarySalaryPrint');
Route::get('/NuasalarySalaryDelete/{id}', 'NursaryController@NuasalarySalaryDelete');


Route::get('/NuBSalary', 'NursaryController@NuBSalary');
Route::get('/NurBPaySalary/{id}', 'NursaryController@NurBPaySalary');
Route::post('/SaveNusaryBSalary', 'NursaryController@SaveNusaryBSalary');
Route::get('/NuBsList', 'NursaryController@NuBsList');
Route::get('/NuBsalarySalaryPrint/{id}', 'NursaryController@NuBsalarySalaryPrint');
Route::get('/NuBsalarySalaryDelete/{id}', 'NursaryController@NuBsalarySalaryDelete');



Route::get('/KgASalary', 'KgController@KgASalary');
Route::get('/KgAPaySalary/{id}', 'KgController@KgAPaySalary');
Route::post('/SaveKgASalary', 'KgController@SaveKgASalary');
Route::get('/KgAsList', 'KgController@KgAsList');
Route::get('/KgASalaryPrint/{id}', 'KgController@KgASalaryPrint');
Route::get('/KgaSalaryDelete/{id}', 'KgController@KgaSalaryDelete');



Route::get('/KgBSalary', 'KgController@KgBSalary');
Route::get('/KgBPaySalary/{id}', 'KgController@KgBPaySalary');
Route::post('/SaveKgBSalary', 'KgController@SaveKgBSalary');
Route::get('/KgBsList', 'KgController@KgBsList');
Route::get('/KgBSalaryPrint/{id}', 'KgController@KgBSalaryPrint');
Route::get('/KgBSalaryDelete/{id}', 'KgController@KgBSalaryDelete');


/************** Clsaa One Salary  ****************/

Route::get('/OneASalary', 'ClassOneController@OneASalary');
Route::get('/OneAPaySalary/{id}', 'ClassOneController@OneAPaySalary');
Route::post('/SaveOneASalary', 'ClassOneController@SaveOneASalary');
Route::get('/OneAsList', 'ClassOneController@OneAsList');
Route::get('/OneASalaryPrint/{id}', 'ClassOneController@OneASalaryPrint');
Route::get('/OneaSalaryDelete/{id}', 'ClassOneController@OneaSalaryDelete');


Route::get('/OneBSalary', 'ClassOneController@OneBSalary');
Route::get('/OneBPaySalary/{id}', 'ClassOneController@OneBPaySalary');
Route::post('/SaveOneBSalary', 'ClassOneController@SaveOneBSalary');
Route::get('/OneBsList', 'ClassOneController@OneBsList');
Route::get('/OneBSalaryPrint/{id}', 'ClassOneController@OneBSalaryPrint');
Route::get('/OneBSalaryDelete/{id}', 'ClassOneController@OneBSalaryDelete');

/************** Clsaa Two Salary  ****************/


Route::get('/TwoASalary', 'ClassTwoController@TwoASalary');
Route::get('/TwoAPaySalary/{id}', 'ClassTwoController@TwoAPaySalary');
Route::post('/SaveTwoASalary', 'ClassTwoController@SaveTwoASalary');
Route::get('/TwoAsList', 'ClassTwoController@TwoAsList');
Route::get('/TwoASalaryPrint/{id}', 'ClassTwoController@TwoASalaryPrint');
Route::get('/TwoASalaryDelete/{id}', 'ClassTwoController@TwoASalaryDelete');


Route::get('/TwoBSalary', 'ClassTwoController@TwoBSalary');
Route::get('/TwoBPaySalary/{id}', 'ClassTwoController@TwoBPaySalary');
Route::post('/SaveTwoBSalary', 'ClassTwoController@SaveTwoBSalary');
Route::get('/TwoBsList', 'ClassTwoController@TwoBsList');
Route::get('/TwoBSalaryPrint/{id}', 'ClassTwoController@TwoBSalaryPrint');
Route::get('/TwoBSalaryDelete/{id}', 'ClassTwoController@TwoBSalaryDelete');

/************** Clsaa Three Salary  ****************/


Route::get('/ThreeASalary', 'ClassThreeController@ThreeASalary');
Route::get('/ThreeAPaySalary/{id}', 'ClassThreeController@ThreeAPaySalary');
Route::post('/SaveThreeASalary', 'ClassThreeController@SaveThreeASalary');
Route::get('/ThreeAsList', 'ClassThreeController@ThreeAsList');
Route::get('/ThreeASalaryPrint/{id}', 'ClassThreeController@ThreeASalaryPrint');
Route::get('/ThreeASalaryDelete/{id}', 'ClassThreeController@ThreeASalaryDelete');


Route::get('/ThreeBSalary', 'ClassThreeController@ThreeBSalary');
Route::get('/ThreeBPaySalary/{id}', 'ClassThreeController@ThreeBPaySalary');
Route::post('/SaveThreeBSalary', 'ClassThreeController@SaveThreeBSalary');
Route::get('/ThreeBsList', 'ClassThreeController@ThreeBsList');
Route::get('/ThreeBSalaryPrint/{id}', 'ClassThreeController@ThreeBSalaryPrint');
Route::get('/ThreeBSalaryDelete/{id}', 'ClassThreeController@ThreeBSalaryDelete');

/************** Clsaa Four Salary  ****************/


Route::get('/FourASalary', 'ClassFourController@FourASalary');
Route::get('/FourAPaySalary/{id}', 'ClassFourController@FourAPaySalary');
Route::post('/SaveFourASalary', 'ClassFourController@SaveFourASalary');
Route::get('/FourAsList', 'ClassFourController@FourAsList');
Route::get('/FourASalaryPrint/{id}', 'ClassFourController@FourASalaryPrint');
Route::get('/FourASalaryDelete/{id}', 'ClassFourController@FourASalaryDelete');


Route::get('/FourBSalary', 'ClassFourController@FourBSalary');
Route::get('/FourBPaySalary/{id}', 'ClassFourController@FourBPaySalary');
Route::post('/SaveFourBSalary', 'ClassFourController@SaveFourBSalary');
Route::get('/FourBsList', 'ClassFourController@FourBsList');
Route::get('/FourBSalaryPrint/{id}', 'ClassFourController@FourBSalaryPrint');
Route::get('/FourBSalaryDelete/{id}', 'ClassFourController@FourBSalaryDelete');

/************** Clsaa Five Salary  ****************/


Route::get('/FiveASalary', 'ClassFiveController@FiveASalary');
Route::get('/FiveAPaySalary/{id}', 'ClassFiveController@FiveAPaySalary');
Route::post('/SaveFiveASalary', 'ClassFiveController@SaveFiveASalary');
Route::get('/FiveAsList', 'ClassFiveController@FiveAsList');
Route::get('/FiveASalaryPrint/{id}', 'ClassFiveController@FiveASalaryPrint');
Route::get('/FiveASalaryDelete/{id}', 'ClassFiveController@FiveASalaryDelete');


Route::get('/FiveBSalary', 'ClassFiveController@FiveBSalary');
Route::get('/FiveBPaySalary/{id}', 'ClassFiveController@FiveBPaySalary');
Route::post('/SaveFiveBSalary', 'ClassFiveController@SaveFiveBSalary');
Route::get('/FiveBsList', 'ClassFiveController@FiveBsList');
Route::get('/FiveBSalaryPrint/{id}', 'ClassFiveController@FiveBSalaryPrint');
Route::get('/FiveBSalaryDelete/{id}', 'ClassFiveController@FiveBSalaryDelete');





/************** View Attentest  ****************/

Route::get('/ViewAttentest', 'StudentController@ViewsAttentest');
Route::post('/AttendanceSave', 'StudentController@AttendanceSave');





/************** Student Attentest  ****************/

Route::get('/PlayAtents', 'AttentestController@PlayAtents');
Route::get('/StuAttentsListPA', 'AttentestController@StuAttentsListPA');
Route::post('/PlayAtentsSave', 'AttentestController@PlayAtentsSave');
Route::get('/DeletePlayatents/{id}', 'AttentestController@DeletePlayatents');
Route::get('/StudentAttentest', 'StudentController@StudentAttentest');



/************** Teacher  ****************/

Route::get('/TeacherEntry', 'TeacherController@TeacherEntry');
Route::post('/SaveTeacher', 'TeacherController@TeacherSave');
Route::get('/TeacherList', 'TeacherController@TeacherList');
Route::get('/TeachersDelete/{id}', 'TeacherController@TeachersDelete');

/************** Notice  ****************/
Route::get('/NoticesBord', 'NoticeController@NoticesBord');
Route::post('/SaveNotice', 'NoticeController@SaveNotice');
Route::get('/ViewNoticesBord', 'NoticeController@ViewNoticesBord');
Route::get('/NoticeBoardPrint/{id}', 'NoticeController@NoticeBoardPrint');
Route::get('/NoticeBoardDelete/{id}', 'NoticeController@NoticeBoardDelete');


/************** Marksheet ****************/

Route::get('/StudentsMark', 'MarkSheetController@StudentsMark');



/************** Play A Marksheet ****************/

Route::get('/PlayAMarkSheetCreate', 'MarkSheetController@PlayAMarkSheetCreate');
Route::get('/PlayAIncMarkS/{id}', 'MarkSheetController@PlayAIncMarkS');
Route::get('/ViewStudentsMarkList', 'MarkSheetController@ViewStudentsMarkList');
Route::post('/SavePlayAMarkSh', 'MarkSheetController@SavePlayAMarkSh');
Route::get('/PlayAMarkSheetView', 'PlayAMSheetController@PlayAMarkSheetView');
Route::get('/PlayAMSheetPrint/{id}', 'PlayAMSheetController@PlayAMSheetPrint');
Route::get('/PlayAMSheetEdit/{id}', 'PlayAMSheetController@PlayAMSheetEdit');
Route::post('/UpdatePlayAMarkSh', 'PlayAMSheetController@UpdatePlayAMarkSh');
Route::get('/PlayAMSheetDelete/{id}', 'PlayAMSheetController@PlayAMSheetDelete');


/************** Play B Marksheet ****************/

Route::get('/PlayBMarkSheetCreate', 'PlayBMarkController@PlayBMarkSheetCreate');
Route::get('/PlayBIncMarkS/{id}', 'PlayBMarkController@PlayBIncMarkS');
Route::get('/ViewStudentsMarkList', 'MarkSheetController@ViewStudentsMarkList');
Route::post('/SavePlayBMarkSh', 'PlayBMarkController@SavePlayBMarkSh');
Route::get('/PlayBMarkSheetView', 'PlayBMarkController@PlayBMarkSheetView');
Route::get('/PlayBMSheetEdit/{id}', 'PlayBMarkController@PlayBMSheetEdit');
Route::post('/UpdatePlayBMarkSh', 'PlayBMarkController@UpdatePlayBMarkSh');
Route::get('/PlayBMSheetDelete/{id}', 'PlayBMarkController@PlayBMSheetDelete');
Route::get('/PlayBMSheetPrint/{id}', 'PlayBMarkController@PlayBMSheetPrint');


/************** Nursary  A Marksheet ****************/

Route::get('/NuAMarkSheetCreate', 'NursaryMarkController@NuAMarkSheetCreate');
Route::get('/NuAIncMarkS/{id}', 'NursaryMarkController@NuAIncMarkS');
Route::post('/SaveNuAMarkSh', 'NursaryMarkController@SaveNuAMarkSh');
Route::get('/NuAMarkSheetView', 'NursaryMarkController@NuAMarkSheetView');
Route::get('/NuAMSheetEdit/{id}', 'NursaryMarkController@NuAMSheetEdit');
Route::post('/UpdateNuAMarkSh', 'NursaryMarkController@UpdateNuAMarkSh');
Route::get('/NuAMSheetPrint/{id}', 'NursaryMarkController@NuAMSheetPrint');
Route::get('/NuAMSheetDelete/{id}', 'NursaryMarkController@NuAMSheetDelete');


/************** Nursary  B Marksheet ****************/

Route::get('/NuBMarkSheetCreate', 'NursaryMarkController@NuBMarkSheetCreate');
Route::get('/NuBIncMarkS/{id}', 'NursaryMarkController@NuBIncMarkS');
Route::post('/SaveNuBMarkSh', 'NursaryMarkController@SaveNuBMarkSh');
Route::get('/NuBMarkSheetView', 'NursaryMarkController@NuBMarkSheetView');
Route::get('/NuBMSheetEdit/{id}', 'NursaryMarkController@NuBMSheetEdit');
Route::post('/UpdateNuBMarkSh', 'NursaryMarkController@UpdateNuBMarkSh');
Route::get('/NuBMSheetPrint/{id}', 'NursaryMarkController@NuBMSheetPrint');
Route::get('/NuBMSheetDelete/{id}', 'NursaryMarkController@NuBMSheetDelete');



/************** KG Section A Marksheet ****************/

Route::get('/KgAMarkSheetCreate', 'KgMarkController@KgAMarkSheetCreate');
Route::get('/KgAIncMarkS/{id}', 'KgMarkController@KgAIncMarkS');
Route::post('/SaveKgAMarkSh', 'KgMarkController@SaveKgAMarkSh');
Route::get('/KgAMarkSheetView', 'KgMarkController@KgAMarkSheetView');
Route::get('/KgAMSheetEdit/{id}', 'KgMarkController@KgAMSheetEdit');
Route::post('/UpdateKgAMarkSh', 'KgMarkController@UpdateKgAMarkSh');
Route::get('/KgAMSheetPrint/{id}', 'KgMarkController@KgAMSheetPrint');
Route::get('/KgAMSheetDelete/{id}', 'KgMarkController@KgAMSheetDelete');

/************** KG Section B Marksheet ****************/

Route::get('/KgBMarkSheetCreate', 'KgMarkController@KgBMarkSheetCreate');
Route::get('/KgBIncMarkS/{id}', 'KgMarkController@KgBIncMarkS');
Route::post('/SaveKgBMarkSh', 'KgMarkController@SaveKgBMarkSh');
Route::get('/KgBMarkSheetView', 'KgMarkController@KgBMarkSheetView');
Route::get('/KgBMSheetEdit/{id}', 'KgMarkController@KgBMSheetEdit');
Route::post('/UpdateKgBMarkSh', 'KgMarkController@UpdateKgBMarkSh');
Route::get('/KgBMSheetPrint/{id}', 'KgMarkController@KgBMSheetPrint');
Route::get('/KgBMSheetDelete/{id}', 'KgMarkController@KgBMSheetDelete');


/************** One Section A Marksheet ****************/

Route::get('/OneAMarkSheetCreate', 'OneMarkController@OneAMarkSheetCreate');
Route::get('/OneAIncMarkS/{id}', 'OneMarkController@OneAIncMarkS');
Route::post('/SaveOneAMarkSh', 'OneMarkController@SaveOneAMarkSh');
Route::get('/OneAMarkSheetView', 'OneMarkController@OneAMarkSheetView');
Route::get('/OneAMSheetEdit/{id}', 'OneMarkController@OneAMSheetEdit');
Route::post('/UpdateOneAMarkSh', 'OneMarkController@UpdateOneAMarkSh');
Route::get('/OneAMSheetPrint/{id}', 'OneMarkController@OneAMSheetPrint');
Route::get('/OneAMSheetDelete/{id}', 'OneMarkController@OneAMSheetDelete');

/************** One Section B Marksheet ****************/

Route::get('/OneBMarkSheetCreate', 'OneMarkController@OneBMarkSheetCreate');
Route::get('/OneBIncMarkS/{id}', 'OneMarkController@OneBIncMarkS');
Route::post('/SaveOneBMarkSh', 'OneMarkController@SaveOneBMarkSh');
Route::get('/OneBMarkSheetView', 'OneMarkController@OneBMarkSheetView');
Route::get('/OneBMSheetEdit/{id}', 'OneMarkController@OneBMSheetEdit');
Route::post('/UpdateOneBMarkSh', 'OneMarkController@UpdateOneBMarkSh');
Route::get('/OneBMSheetPrint/{id}', 'OneMarkController@OneBMSheetPrint');
Route::get('/OneBMSheetDelete/{id}', 'OneMarkController@OneBMSheetDelete');

/************** Two Section A Marksheet ****************/

Route::get('/TwoAMarkSheetCreate', 'TwoMarkController@TwoAMarkSheetCreate');
Route::get('/TwoAIncMarkS/{id}', 'TwoMarkController@TwoAIncMarkS');
Route::post('/SaveTwoAMarkSh', 'TwoMarkController@SaveTwoAMarkSh');
Route::get('/TwoAMarkSheetView', 'TwoMarkController@TwoAMarkSheetView');
Route::get('/TwoAMSheetEdit/{id}', 'TwoMarkController@TwoAMSheetEdit');
Route::post('/UpdateTwoAMarkSh', 'TwoMarkController@UpdateTwoAMarkSh');
Route::get('/TwoAMSheetPrint/{id}', 'TwoMarkController@TwoAMSheetPrint');
Route::get('/TwoAMSheetDelete/{id}', 'TwoMarkController@TwoAMSheetDelete');

/************** Two Section B Marksheet ****************/

Route::get('/TwoBMarkSheetCreate', 'TwoMarkController@TwoBMarkSheetCreate');
Route::get('/TwoBIncMarkS/{id}', 'TwoMarkController@TwoBIncMarkS');
Route::post('/SaveTwoBMarkSh', 'TwoMarkController@SaveTwoBMarkSh');
Route::get('/TwoBMarkSheetView', 'TwoMarkController@TwoBMarkSheetView');
Route::get('/TwoBMSheetEdit/{id}', 'TwoMarkController@TwoBMSheetEdit');
Route::post('/UpdateTwoBMarkSh', 'TwoMarkController@UpdateTwoBMarkSh');
Route::get('/TwoBMSheetPrint/{id}', 'TwoMarkController@TwoBMSheetPrint');
Route::get('/TwoBMSheetDelete/{id}', 'TwoMarkController@TwoBMSheetDelete');




/************** Class Three Section A Marksheet ****************/

Route::get('/ThreeAMarkSheetCreate', 'ThreeMController@ThreeAMarkSheetCreate');
Route::get('/ThreeAIncMarkS/{id}', 'ThreeMController@ThreeAIncMarkS');
Route::post('/SaveThreeAMarkSh', 'ThreeMController@SaveThreeAMarkSh');
Route::get('/ThrAMarkSheetView', 'ThreeMController@ThrAMarkSheetView');
Route::get('/ThreeAMSheetEdit/{id}', 'ThreeMController@ThreeAMSheetEdit');
Route::post('/UpdateThreeAMarkSh', 'ThreeMController@UpdateThreeAMarkSh');
Route::get('/ThreeAMSheetDelete/{id}', 'ThreeMController@ThreeAMSheetDelete');
Route::get('/ThreeAMSheetPrint/{id}', 'ThreeMController@ThreeAMSheetPrint');


/************** Class Three Section B Marksheet ****************/

Route::get('/ThreeBMarkSheetCreate', 'ThreeMController@ThreeBMarkSheetCreate');
Route::get('/ThreeBIncMarkS/{id}', 'ThreeMController@ThreeBIncMarkS');
Route::post('/SaveThreeBMarkSh', 'ThreeMController@SaveThreeBMarkSh');
Route::get('/ThrBMarkSheetView', 'ThreeMController@ThrBMarkSheetView');
Route::get('/ThreeBMSheetEdit/{id}', 'ThreeMController@ThreeBMSheetEdit');
Route::post('/UpdateThreeBMarkSh', 'ThreeMController@UpdateThreeBMarkSh');
Route::get('/ThreeBMSheetDelete/{id}', 'ThreeMController@ThreeBMSheetDelete');
Route::get('/ThreeBMSheetPrint/{id}', 'ThreeMController@ThreeBMSheetPrint');



/************** Class Four Section A Marksheet ****************/

Route::get('/FourAMarkSheetCreate', 'FoMarkController@FourAMarkSheetCreate');
Route::get('/FourAIncMarkS/{id}', 'FoMarkController@FourAIncMarkS');
Route::post('/SaveFourAMarkSh', 'FoMarkController@SaveFourAMarkSh');
Route::get('/FourAMarkSheetView', 'FoMarkController@FourAMarkSheetView');
Route::get('/FourAMSheetEdit/{id}', 'FoMarkController@FourAMSheetEdit');
Route::post('/UpdateFourAMarkSh', 'FoMarkController@UpdateFourAMarkSh');
Route::get('/FourAMSheetDelete/{id}', 'FoMarkController@FourAMSheetDelete');
Route::get('/FourAMSheetPrint/{id}', 'FoMarkController@FourAMSheetPrint');


/************** Class Four Section B Marksheet ****************/

Route::get('/FourBMarkSheetCreate', 'FoMarkController@FourBMarkSheetCreate');
Route::get('/FourBIncMarkS/{id}', 'FoMarkController@FourBIncMarkS');
Route::post('/SaveFourBMarkSh', 'FoMarkController@SaveFourBMarkSh');
Route::get('/FourBMarkSheetView', 'FoMarkController@FourBMarkSheetView');
Route::get('/FourBMSheetEdit/{id}', 'FoMarkController@FourBMSheetEdit');
Route::post('/UpdateFourBMarkSh', 'FoMarkController@UpdateFourBMarkSh');
Route::get('/FourBMSheetDelete/{id}', 'FoMarkController@FourBMSheetDelete');
Route::get('/FourBMSheetPrint/{id}', 'FoMarkController@FourBMSheetPrint');



/************** Five Section A Marksheet ****************/

Route::get('/FiveAMarkSheetCreate', 'FiveMarkController@FiveAMarkSheetCreate');
Route::get('/FiveAIncMarkS/{id}', 'FiveMarkController@FiveAIncMarkS');
Route::post('/SaveFiveAMarkSh', 'FiveMarkController@SaveFiveAMarkSh');
Route::get('/FiveAMarkSheetView', 'FiveMarkController@FiveAMarkSheetView');
Route::get('/FiveAMSheetPrint/{id}', 'FiveMarkController@FiveAMSheetPrint');
Route::get('/FiveAMSheetEdit/{id}', 'FiveMarkController@FiveAMSheetEdit');
Route::post('/UpdateFiveAMarkSh', 'FiveMarkController@UpdateFiveAMarkSh');
Route::get('/FiveAMSheetDelete/{id}', 'FiveMarkController@FiveAMSheetDelete');


/************** Five Section  B Marksheet ****************/

Route::get('/FiveBMarkSheetCreate', 'FiveMarkController@FiveBMarkSheetCreate');
Route::get('/FiveBIncMarkS/{id}', 'FiveMarkController@FiveBIncMarkS');
Route::post('/SaveFiveBMarkSh', 'FiveMarkController@SaveFiveBMarkSh');
Route::get('/FiveBMarkSheetView', 'FiveMarkController@FiveBMarkSheetView');
Route::get('/FiveBMSheetEdit/{id}', 'FiveMarkController@FiveBMSheetEdit');
Route::post('/UpdateFiveBMarkSh', 'FiveMarkController@UpdateFiveBMarkSh');
Route::get('/FiveBMSheetDelete/{id}', 'FiveMarkController@FiveBMSheetDelete');
Route::get('/FiveBMSheetPrint/{id}', 'FiveMarkController@FiveBMSheetPrint');



/************** Admit Card ****************/

Route::get('/CreateAdmitCard', 'AdmitCardController@CreateAdmitCard');
Route::get('/AdmitSearch', 'AdmitCardController@AdmitSearch');
Route::post('/SaveAdmitCard', 'AdmitCardController@SaveAdmitCard');
Route::get('/AdmitCardList', 'AdmitCardController@AdmitCardList');
Route::get('/AdmitCardPrint/{id}', 'AdmitCardController@AdmitCardPrint');
Route::get('/DeleteAdmit/{id}', 'AdmitCardController@DeleteAdmit');



/************** ID Card ****************/

Route::get('/CreateIDCard', 'AdmitCardController@CreateIDCard');
Route::get('/IdCardSearch', 'AdmitCardController@IdCardSearch');


/************** Extra Setup ****************/

Route::get('/StudentSubject', 'ExtarController@StudentSubject');
Route::post('/SaveClassSubject', 'ExtarController@SaveClassSubject');
Route::get('/SubjectList', 'ExtarController@SubjectList');
Route::get('/DeleteSubject/{id}', 'ExtarController@DeleteSubject');



Route::get('/ExamType', 'ExtarController@ExamType');
Route::post('/SaveExamType', 'ExtarController@SaveExamType');
Route::get('/ExamTypeList', 'ExtarController@ExamTypeList');
Route::get('/ExamtypeDelete/{id}', 'ExtarController@ExamtypeDelete');



/************** School's Expence****************/

Route::get('/SchoolExpenceEntry', 'SchoolExpenceController@SchoolExpenceEntry');
Route::post('/SaveSchoolExpence', 'SchoolExpenceController@SaveSchoolExpence');
Route::get('/SchoolExpenceList', 'SchoolExpenceController@SchoolExpenceList');
Route::get('/SchoolExpenceDelete/{id}', 'SchoolExpenceController@SchoolExpenceDelete');


/************** Seat Plan ****************/
Route::get('/CreateSeatPlan', 'ExtarController@CreateSeatPlan');
Route::post('/SaveSeatPlan', 'ExtarController@SaveSeatPlan');
Route::get('/ViewSeatPlan', 'ExtarController@ViewSeatPlan');
Route::get('/DeleteSeatPlan/{id}', 'ExtarController@DeleteSeatPlan');
Route::get('/EditSeatPlan/{id}', 'ExtarController@EditSeatPlan');
Route::post('/UpdateSeatPlan', 'ExtarController@UpdateSeatPlan');
Route::get('/PrintSeatPlan/{id}', 'ExtarController@PrintSeatPlan');



/************** Room Create ****************/
Route::get('/RoomCreate', 'RoomController@RoomCreate');
Route::post('/SaveRoom', 'RoomController@SaveRoom');
Route::get('/ViewRoom', 'RoomController@ViewRoom');
Route::get('/DeleteRoom/{id}', 'RoomController@DeleteRoom');

/************** Class Create ****************/
Route::get('/ClassCreate', 'ClassController@ClassCreate');
Route::post('/SaveClass', 'ClassController@SaveClass');
Route::get('/ViewClass', 'ClassController@ViewClass');


/************** Section Create ****************/
Route::get('/CreateSection', 'SeactonController@CreateSection');
Route::post('/SaveSection', 'SeactonController@SaveSection');
Route::get('/ViewSection', 'SeactonController@ViewSection');
Route::get('/DeleteSection/{id}', 'SeactonController@DeleteSection');

/************** Quesations Create ****************/
Route::get('/CreateQ', 'QuesController@CreateQ');
Route::post('/SaveQ', 'QuesController@SaveQ');
Route::get('/ViewQ', 'QuesController@ViewQ');
Route::get('/DeleteQ/{id}', 'QuesController@DeleteQ');