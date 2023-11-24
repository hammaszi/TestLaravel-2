<?php

use App\Models\student;
use App\Models\Classroom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\segitigaController;
use App\Http\Controllers\ClassroomController;

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

Route::get('/', function () {
    return view('test.home');
}); 

Route::view('/about-us', 'test.about');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [studentController::class, 'show'])->middleware('auth');
Route::get('/student/{id}', [studentController::class, 'show_detail'])->middleware('auth');
Route::get('/student-add', [studentController::class, 'create_data'])->middleware('auth');
Route::post('/student', [studentController::class, 'save_data'])->middleware('auth');
Route::get('/student-update/{id}', [studentController::class, 'update_data'])->middleware('auth');
Route::put('/student/{id}', [studentController::class, 'submit_data'])->middleware('auth');
Route::get('/student-delete/{id}', [studentController::class, 'delete'])->middleware('auth');
Route::delete('/student-destroy/{id}', [studentController::class, 'delete_data'])->middleware('auth');
Route::get('/students/deleted', [studentController::class, 'show_deleted'])->middleware('auth');
Route::get('/student/{id}/Restore', [studentController::class, 'restore_data'])->middleware('auth');
Route::get('/class', [ClassroomController::class, 'show'])->middleware('auth');
Route::get('/class/{id}', [ClassroomController::class, 'show_detail'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'show'])->middleware('auth');
Route::get('/teacher/{id}', [TeacherController::class, 'show_detail'])->middleware('auth');

Route::view('/java', 'test-java');

//Belajar Route
Route::get('/contact', function () {
    return view('Contact',  ['name' => 'masHammas', 'phone' => '088954240018440']);
});

Route::view('/contact-us', 'Contact', ['name' => 'masHammas', 'phone' => '088954240018440']);

// Route::redirect('/about', '/');

Route::get('/detail/{id_detail}', function($id_detail) {
    return 'Id User = ' .$id_detail;
});

Route::get('/user/{id_user}', function($id_user){
    return view('user', ['id_user' => $id_user]);
});

Route::get('/admin/{admin?}', function(?string $admin = 'Sisi') {
    return $admin;
});

Route::prefix('detailuser') -> group(function(){
    Route::get('/user-name', function(){
        return 'Route User Nama';
    });

    Route::get('/user-alamat', function($nama = 'Jhoni'){
        return $nama;
    });

    Route::get('/user-usia', function($lahir = '05 Agustus 1996') {
        return view('Usia', ['usia' => '20', 'tglLahir' => $lahir]);
    });
});