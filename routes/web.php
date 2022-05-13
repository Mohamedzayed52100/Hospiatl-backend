<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PationController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::post('/updatestudent', [StudentController::class , 'updateStudent'])->name('update.student');
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('loginsubmit', [PationController::class, 'loginsubmit']);
Route::get('addphoto',[PationController::class,'dorpzone']);
Route::get('loginsubmit/{lang}',[PationController::class,'enarr']);
Route::post('add-dropzone',[PationController::class,'dorpzoneSubmit'])->name('add.dropzone');
Route::get('/addpation', [PationController::class , 'addpation'])->name('add.student');
Route::post('/storepation', [PationController::class , 'storepation'])->name('store.student');
Route::get('/zipFile', [ZipController::class , 'zipFile'])->name('zipFile');
Route::get('/allpation', [PationController::class , 'pationall'])->name('pation');
Route::get('/editstudent/{id}', [PationController::class , 'editStudent']);
Route::post('/updatestudent', [PationController::class , 'updateStudent'])->name('update.student');

Route::get('/deletestudent/{id}', [PationController::class , 'deleteStudent']);
Route::get('/singlepation/{id}', [PationController::class , 'singlepation']);
//--------------
Route::get('/adddoc', [DoctorController::class , 'adddoc'])->name('add.doc');
Route::post('/stotedoc', [DoctorController::class , 'storeStudent'])->name('store.doctor');
Route::get('/editdoc/{id}', [DoctorController::class , 'edit'])->name('edit.doc');
Route::post('/updatedoc', [DoctorController::class , 'updatedoc'])->name('update.doctor');
Route::get('/alldocors', [DoctorController::class , 'doctor'])->name('doctor');
Route::get('/singledoc/{id}', [DoctorController::class , 'detbyid'])->name('doctor.id');
Route::get('/deletedoc/{id}', [DoctorController::class , 'deleteDoctor'])->name('doctor.delete');
Route::get('/gallery', [DoctorController::class , 'gallery']);
Route::get('/addstaff', [StaffController::class , 'insertsatff']);
Route::post('/storestaff', [StaffController::class , 'storeStaff']);
Route::get('/allstaff', [StaffController::class , 'getall']);
Route::get('/kind/{k}', [StaffController::class , 'kind']);
 Route::get('/nursing', function(){
    return  view('nursing');
});
Route::get('/mangement', function(){
    return  view('mangement');
});
Route::get('/doctors', function(){
    return  view('doctors');
});

Route::get('/empolyee', function(){
    return  view('empolyee');
});

