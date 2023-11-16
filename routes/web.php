<?php

use App\Http\Controllers\ConnectionsController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//login routes
Route::post('/Login',[LoginController::class,'login']);

//Post from forms submitsions routes
Route::post('/StudentRegister', [RegisterController::class,'storeStud'])->middleware('admin');

Route::post('/AccEmpRegister', [RegisterController::class,'store'])->middleware('admin');

Route::post('/Assign',  [ConnectionsController::class,'Connected'])->name('CreateCon')->middleware('admin');

Route::post('/StudentEdit',  [EditController::class,'EditStudent'])->name('EditStud')->middleware('admin');

Route::post('/AlumnusEdit',  [EditController::class,'EditAlumnus'])->name('EditAlu')->middleware('admin');

Route::post('/AccEmpEdit',  [EditController::class,'EditAcademic'])->name('EditAcad')->middleware('admin');

Route::put('/StudentEdit',  [DeleteController::class,'AlumniBecome'])->name('AlumniStud')->middleware('admin');

Route::delete('/StudentEdit',  [DeleteController::class,'DeleteStudent'])->name('DeleteStud')->middleware('admin');

Route::delete('/AlumnusEdit',  [DeleteController::class,'DeleteAlumnus'])->name('DeleteAlu')->middleware('admin');

Route::delete('/AccEmpEdit',  [DeleteController::class,'DeleteAcademic'])->name('DeleteAcad')->middleware('admin');

Route::delete('/Assign',  [DeleteController::class,'DeleteConnection'])->name('DeleteCon')->middleware('admin');

Route::delete('/ManageDep',  [DeleteController::class,'DeleteDep'])->name('DepDel')->middleware('admin');

Route::delete('/StudentRecords', [DisplayController::class,'DelStudRecord'])->name('DeleteRec')->middleware('admin');

Route::post('/StudentSelect',  [EditController::class,'displayEditStud'])->middleware('admin');

Route::post('/AlumniSelect',  [EditController::class,'displayAlu'])->name('DisplayAlu')->middleware('admin');

Route::post('/Alumni',  [EditController::class,'DisplayEditAlu'])->name('DisplayEditAlu')->middleware('admin');

Route::post('/ManageDep',  [EditController::class,'AddDep'])->name('AddDep')->middleware('admin');

Route::post('/PrintSearchStudent', [SearchController::class,'SearchStudent'])->name('SearchStud')->middleware('admin');

Route::post('/PrintSearchAcademic', [SearchController::class,'SearchAcademic'])->name('SearchAcad')->middleware('admin');

Route::post('/PrintSearchRelation', [SearchController::class,'SearchRelation'])->name('SearchRel')->middleware('admin');

Route::post('/PrintSearchAlumnus', [SearchController::class,'SearchAlumnus'])->name('SearchAlu')->middleware('admin');

Route::post('/AccEmpSelect',  [EditController::class,'displayEditAcad'])->middleware('admin');

Route::post('/MyProfileSupervisor',  [EditController::class,'EditProfileSupervisor'])->name('EditMyProfSuper');

Route::post('/MyProfileStudent', [EditController::class,'EditProfileStudent'])->name('EditMyProfStud');

//display routes
Route::get('/Student', [DisplayController::class,'displayStud'])->middleware('student');

Route::get('/Admin', [DisplayController::class,'displayEmp'])->middleware('admin');

Route::get('/StudentRecords', [DisplayController::class,'displayStudRecord'])->middleware('admin');

Route::get('/Supervisor', [DisplayController::class,'displaySuperv'])->middleware('supervisor');

Route::get('/Assign', [DisplayController::class,'displayConnections'])->middleware('admin');

Route::get('/ManageDep', [DisplayController::class,'displayDep'])->middleware('admin');

Route::get('/StudentSelect', [DisplayController::class,'displaySelectStud'])->middleware('admin');

Route::get('/AlumniSelect', [DisplayController::class,'displaySelectAlu'])->middleware('admin');

Route::get('/AccEmpSelect', [DisplayController::class,'displaySelectAcad'])->middleware('admin');

Route::get('/MyProfileSupervisor', [DisplayController::class,'displayProfileSupervisor'])->middleware('supervisor');

Route::get('/MyProfileStudent', [DisplayController::class,'displayProfileStudent'])->middleware('student');

///single routes

Route::get('/AccEmpRegister', [DisplayController::class,'displayAcadReg'])->middleware('admin');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function()
{
    return view('Login');
})->name('home');

Route::get('/StudentRegister',[DisplayController::class,'displayStudReg'])->middleware('admin');

Route::get('/logout', [LoginController::class,'Logout']);

Route::post('/SaveStudRec', [DisplayController::class,'SaveStudRecord'])->middleware('admin');

Route::post('/DownStudRec', [DisplayController::class,'DownStudRecord'])->middleware('admin');

Route::get('/download-PDF_Academic',[SearchController::class,'pdfA'])->middleware('admin');

Route::get('/download-PDF_Student', [SearchController::class,'pdfS'])->middleware('admin');

Route::get('/download-PDF_Relation',[SearchController::class,'pdfR'])->middleware('admin');

Route::get('/download-PDF_Alumnus', [SearchController::class,'pdfL'])->middleware('admin');

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
