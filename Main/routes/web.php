<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
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
// Route::any('/register', function () {
//     return view('/patientDashboard');
// });
// Route::view('/accountantRegisterForm','/accountantRegisterForm');  ____-----____
// Route::view('/adminDashboard','/adminDashboard');                  ____----___---___
// Route::view('/addStaffRegister','/addStaffRegister');             _____----____-___-_
// Route::view('/receptionistRegisterForm','/receptionistRegisterForm'); ____----____----
// Route::view('/editAccountantForm','/editAccountantForm');
// Route::view('/editStaffForm','/editStaffForm');
// // Route::view('/editReceptionistForm','/editReceptionistForm');
// Route::view('/receptionistDashboard','/receptionistDashboard');
// Route::view('/receptionistSchedule','/receptionistSchedule');
// Route::view('/accountantDashboard','/accountantDashboard');
// Route::view('/accountantBilling','/accountantBilling');
// Route::view('/patientViewReports','/patientViewReports');
//  Route::view('/patientViewPrescription','/patientViewPrescription');
// Route::view('/patientTestRecommendation','/patientTestRecommendation');
// Route::view('/patientAppointment','/patientAppointment');
// Route::get('/login', "UserController@login");
Auth::routes();
Route::any('/home', "HomeController@login")->middleware('auth');
Route::any('/', "HomeController@login");
Route::any('/adminDashboard', "HomeController@login")->middleware('auth');

Route::any('/patientDashboard', "HomeController@login")->middleware('auth');
Route::any('/staffDashboard', "HomeController@login")->middleware('auth');
Route::any('/addStaffRegister', "StaffController@viewadd")->middleware('auth');
Route::any('/receptionistRegisterForm', "ReceptionistController@viewreg")->middleware('auth');

Route::any('/patientRegister',"AdminController@viewpatreg")->middleware('auth');
Route::any('/receptionistpatientRegister', "ReceptionistController@viewrecppat")->middleware('auth');
Route::any('/accountantRegisterForm', "AdminController@viewaccreg")->middleware('auth');
Route::any('/receptionistDashboard', "HomeController@login")->middleware('auth');
Route::any('/patientTestRecommendation',"PatientController@test")->middleware('auth');


Route::post('/addpatAppointment', "AppointmentController@patcreate")->middleware('auth');
//Receptionist Appointment
Route::get('/receptionistSchedule', "AppointmentController@index")->middleware('auth');
Route::post('/addAppointment', "AppointmentController@create")->middleware('auth');
Route::get('/deleteAppointment/{id}', "AppointmentController@delete")->middleware('auth');
Route::post('/updateAppointment/{id}', "AppointmentController@update")->middleware('auth');


//genereate invoice
Route::post('/addInvoice/{id}', "AppointmentController@addInvoiceFunc")->middleware('auth');

Route::get('/patientAppointment', "AppointmentController@index")->middleware('auth');

Route::get('/accountantConfirmAppointment', "AppointmentController@index")->middleware('auth');
Route::post('/updatestatus3/{id}', "AppointmentController@updatestatus3")->middleware('auth');

Route::post('/updatestatus2/{id}', "AppointmentController@updatestatus2")->middleware('auth');
Route::post('/updatestatus4/{id}', "AppointmentController@updatestatus4")->middleware('auth');

//Admin CRUDS
Route::any('/admineditpatient', "AdminController@loadupdatePatient")->middleware('auth');
Route::any('/receptionisteditpatient', "ReceptionistController@loadupdatePatient")->middleware('auth');
Route::any('/admineditAccountant', "AdminController@loadupdateAccountant")->middleware('auth');
Route::any('/admineditReceptionist', "AdminController@loadupdateReceptionist")->middleware('auth');
Route::any('/admineditStaff', "AdminController@loadupdateStaff")->middleware('auth');
Route::post('/updateAdmin', "AdminController@updateAdminProf")->middleware('auth');
Route::post('/registeraccountant', "AdminController@addAccountant")->middleware('auth');
Route::post('/registerreceptionist', "AdminController@addReceptionist")->middleware('auth');
Route::post('/registerstaff', "AdminController@addStaff")->middleware('auth');
Route::post('/registerpatient', "AdminController@addPatient")->middleware('auth');
Route::post('/receptionistregisterpatient', "ReceptionistController@addPatient")->middleware('auth');
Route::post('/updatePatient', "PatientController@updatePatientProf")->middleware('auth');
Route::post('/updateReceptionist', "ReceptionistController@updateReceptionistProf")->middleware('auth');
Route::post('/updateaccountant', "AccountantController@updateAccountantProf")->middleware('auth');
Route::post('/updateAccountant/{id}', "AdminController@updateAccountant")->middleware('auth');
Route::post('/updateReceptionist/{id}', "AdminController@updateReceptionist")->middleware('auth');
Route::post('/updateStaff/{id}', "AdminController@updateStaff")->middleware('auth');
Route::post('/adminupdatepatient1/{id}', "AdminController@updatePatient1")->middleware('auth');
Route::post('/adminupdatepatient2/{id}', "AdminController@updatePatient2")->middleware('auth');
Route::post('/adminupdatepatient3/{id}', "AdminController@updatePatient3")->middleware('auth');
Route::post('/adminupdatepatient4/{id}', "AdminController@updatePatient4")->middleware('auth');
Route::post('/adminupdatepatient5/{id}', "AdminController@updatePatient5")->middleware('auth');

//Update Receptionist
Route::post('/receptionistupdatepatient1/{id}', "receptionistController@updatePatient1")->middleware('auth');
Route::post('/receptionistupdatepatient2/{id}', "ReceptionistController@updatePatient2")->middleware('auth');
Route::post('/receptionistupdatepatient3/{id}', "ReceptionistController@updatePatient3")->middleware('auth');
Route::post('/receptionistupdatepatient4/{id}', "ReceptionistController@updatePatient4")->middleware('auth');
Route::post('/receptionistupdatepatient5/{id}', "ReceptionistController@updatePatient5")->middleware('auth');

//Update Passwords
Route::post('/changepass/{id}', 'AdminController@changepass')->middleware('auth');
//Update Admin
Route::get('/adminOwnEdit', "AdminController@adminOwnEditFunc")->middleware('auth');

Route::get('/patientOwnEdit', "PatientController@patientOwnEditFunc")->middleware('auth');

Route::get('/receptionistOwnEdit', "ReceptionistController@receptionistOwnEditFunc")->middleware('auth');

Route::any('/staffViewReport', "StaffController@loadupdatePatientForReport")->middleware('auth');
Route::get('/staffViewPrescription', "PrescriptionController@indexForStaff")->middleware('auth');
Route::get('/staffOwnEdit', "StaffController@staffOwnEditFunc")->middleware('auth');
Route::post('/updateStaffProf', "StaffController@updateStaffProf")->middleware('auth');
Route::get('/staffScheduleLookup', "AppointmentController@indexForStaff")->middleware('auth');
Route::get('/staffManageTime', "StaffController@changeTime")->middleware('auth');
Route::post('/updateStaffTime', "StaffController@updateStaffTimeFunc")->middleware('auth');

Route::get('/accountantOwnEdit', "AccountantController@accountantOwnEditFunc")->middleware('auth');

//Prescription
Route::post('/generatePrescription/{id}', "PrescriptionController@create")->middleware('auth');
Route::post('/deletePrescription/{id}', "PrescriptionController@delete")->middleware('auth');
Route::post('/updatePrescription/{id}', "PrescriptionController@update")->middleware('auth');
Route::post('/showPrescription/{id}', "PrescriptionController@show")->middleware('auth');
Route::get('/patientViewPrescription', "PrescriptionController@index")->middleware('auth');

Route::post('/reg', 'RegisterController@register');
Route::get('/home', 'HomeController@login')->name('home');
Route::get('/send-email',[MailController::class,'sendMail']);
