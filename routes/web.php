<?php
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
//login routes
Route::post('/Login','LoginController@login');

//Post from forms submitsions routes
Route::post('/StudentRegister','RegisterController@storeStud')->middleware('admin');

Route::post('/AccEmpRegister','RegisterController@store')->middleware('admin');

Route::post('/Assign','ConnectionsController@Connected')->name('CreateCon')->middleware('admin');

Route::post('/StudentEdit','EditController@EditStudent')->name('EditStud')->middleware('admin');

Route::post('/AlumnusEdit','EditController@EditAlumnus')->name('EditAlu')->middleware('admin');

Route::post('/AccEmpEdit','EditController@EditAcademic')->name('EditAcad')->middleware('admin');

Route::put('/StudentEdit','DeleteController@AlumniBecome')->name('AlumniStud')->middleware('admin');

Route::delete('/StudentEdit','DeleteController@DeleteStudent')->name('DeleteStud')->middleware('admin');

Route::delete('/AlumnusEdit','DeleteController@DeleteAlumnus')->name('DeleteAlu')->middleware('admin');

Route::delete('/AccEmpEdit','DeleteController@DeleteAcademic')->name('DeleteAcad')->middleware('admin');

Route::delete('/Assign','DeleteController@DeleteConnection')->name('DeleteCon')->middleware('admin');

Route::delete('/ManageDep','DeleteController@DeleteDep')->name('DepDel')->middleware('admin');

Route::delete('/StudentRecords','DisplayController@DelStudRecord')->name('DeleteRec')->middleware('admin');

Route::post('/StudentSelect', 'EditController@displayEditStud')->middleware('admin');

Route::post('/AlumniSelect', 'EditController@displayAlu')->name('DisplayAlu')->middleware('admin');

Route::post('/Alumni', 'EditController@DisplayEditAlu')->name('DisplayEditAlu')->middleware('admin');

Route::post('/ManageDep', 'EditController@AddDep')->name('AddDep')->middleware('admin');

Route::post('/PrintSearchStudent', 'SearchController@SearchStudent')->name('SearchStud')->middleware('admin');

Route::post('/PrintSearchAcademic', 'SearchController@SearchAcademic')->name('SearchAcad')->middleware('admin');

Route::post('/PrintSearchRelation', 'SearchController@SearchRelation')->name('SearchRel')->middleware('admin');

Route::post('/PrintSearchAlumnus', 'SearchController@SearchAlumnus')->name('SearchAlu')->middleware('admin');

Route::post('/AccEmpSelect', 'EditController@displayEditAcad')->middleware('admin');

Route::post('/MyProfileSupervisor', 'EditController@EditProfileSupervisor')->name('EditMyProfSuper');

Route::post('/MyProfileStudent', 'EditController@EditProfileStudent')->name('EditMyProfStud');

//display routes
Route::get('/Student', 'DisplayController@displayStud')->middleware('student');

Route::get('/Admin', 'DisplayController@displayEmp')->middleware('admin');

Route::get('/StudentRecords', 'DisplayController@displayStudRecord')->middleware('admin');

Route::get('/Supervisor', 'DisplayController@displaySuperv')->middleware('supervisor');

Route::get('/Assign', 'DisplayController@displayConnections')->middleware('admin');

Route::get('/ManageDep', 'DisplayController@displayDep')->middleware('admin');

Route::get('/StudentSelect', 'DisplayController@displaySelectStud')->middleware('admin');

Route::get('/AlumniSelect', 'DisplayController@displaySelectAlu')->middleware('admin');

Route::get('/AccEmpSelect', 'DisplayController@displaySelectAcad')->middleware('admin');

Route::get('/MyProfileSupervisor', 'DisplayController@displayProfileSupervisor')->middleware('supervisor');

Route::get('/MyProfileStudent', 'DisplayController@displayProfileStudent')->middleware('student');

///single routes

Route::get('/AccEmpRegister', 'DisplayController@displayAcadReg')->middleware('admin');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function()
{
    return view('Login');
})->name('home');

Route::get('/StudentRegister','DisplayController@displayStudReg')->middleware('admin');

Route::get('/logout', 'LoginController@Logout');

Route::post('/SaveStudRec', 'DisplayController@SaveStudRecord')->middleware('admin');

Route::post('/DownStudRec', 'DisplayController@DownStudRecord')->middleware('admin');

Route::get('/download-PDF_Academic',"SearchController@pdfA")->middleware('admin');

Route::get('/download-PDF_Student',"SearchController@pdfS")->middleware('admin');

Route::get('/download-PDF_Relation',"SearchController@pdfR")->middleware('admin');

Route::get('/download-PDF_Alumnus',"SearchController@pdfL")->middleware('admin');

Route::get('/pdfacademic', function() {
    return view('pdfacademic');
});

Route::get('/pdfstudent', function() {
    return view('pdfstudent');
});

Route::get('/pdfalumnus', function() {
    return view('pdfalumnus');
});

Route::get('/pdfrelation', function() {
    return view('pdfrelation');
});