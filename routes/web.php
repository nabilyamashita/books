<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\EkstracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/books', [BookController::class, 'index']);

// Route::get('/books', 'App\Http\Controllers\BookController@index');

// macam macam penulisan route

// route::get(('/books') , 'books');
// route::get('/books' , ['$name' => 'nabil yamashita']); (lalu di view blade nya bisa di sambungkan dengan menuliskan {{ $name }} );
// route dengan parameter
// route::get('/product/{$id}' , function($id){
//  return 'ini adalah product dengan id' .%id; 
// });

// jika ingin memunculkan lewat view 
// route::get('/product/{$id}' , function($id){
//  return view ('product' , ['id' => $id]);

route::get('/students', [StudentController::class, 'index']);
route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students-add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/students-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/students-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/students-destroy/{id}', [StudentController::class, 'destroy']);
route::get('/students-deleted', [StudentController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

route::get('/classes', [ClassesController::class, 'index']);
route::get('/classes/{id}', [ClassesController::class, 'show']);
Route::get('/classes-add', [ClassesController::class, 'create']);
Route::post('/class', [ClassesController::class, 'store']);
Route::get('/classes-edit/{id}', [ClassesController::class, 'edit']);
Route::put('/class/{id}', [ClassesController::class, 'update']);
Route::get('/classes-delete/{id}', [ClassesController::class, 'delete']);
Route::delete('/classes-destroy/{id}', [ClassesController::class, 'destroy']);
route::get('/classes-deleted', [ClassesController::class, 'deletedStudent']);
Route::get('/class/{id}/restore', [ClassesController::class, 'restore']);

route::get('/ekstracurricular', [EkstracurricularController::class, 'index']);
route::get('/ekstracurricular/{id}', [EkstracurricularController::class, 'show']);
route::get('/ekstracurricular-add', [EkstracurricularController::class, 'create']);
Route::post('/ekstra', [EkstracurricularController::class, 'store']);
Route::get('/ekstracurricular-edit/{id}', [EkstracurricularController::class, 'edit']);
Route::put('/ekstra/{id}', [EkstracurricularController::class, 'update']);
Route::get('/ekstracurricular-delete/{id}', [EkstracurricularController::class, 'delete']);
Route::delete('/ekstracurricular-destroy/{id}', [EkstracurricularController::class, 'destroy']);
route::get('/ekstracurricular-deleted', [EkstracurricularController::class, 'deletedStudent']);
Route::get('/ekstra/{id}/restore', [EkstracurricularController::class, 'restore']);

route::get('/teacher', [TeacherController::class, 'index']);
route::get('/teacher/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit']);
Route::put('/teachers/{id}', [TeacherController::class, 'update']);
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy']);
route::get('/teacher-deleted', [TeacherController::class, 'deletedStudent']);
Route::get('/teachers/{id}/restore', [TeacherController::class, 'restore']);

