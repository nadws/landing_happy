<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Isiformulir;
use Illuminate\Support\Facades\DB;
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



Route::get('/navbar', function(){
    $data = [
        'h1' => DB::table('h1')->where('id_h1', 1)->first()->isi,
            'img' => DB::table('h1')->where('id_h1', 2)->first()->isi,
            'teks1' => DB::table('h1')->where('id_h1', 3)->first()->isi,
            'teks2' => DB::table('h1')->where('id_h1', 4)->first()->isi,
            'img_hero' => DB::table('h1')->where('id_h1', 7)->first()->isi,
            'teks_tentang1' => DB::table('h1')->where('id_h1', 8)->first()->isi,
            'teks_tentang2' => DB::table('h1')->where('id_h1', 9)->first()->isi,
            'img_tentang' => DB::table('h1')->where('id_h1', 10)->first()->isi,
            'waktu' => DB::table('h1')->where('id_h1', 11)->first()->isi,
            'alamat' => DB::table('h1')->where('id_h1', 12)->first()->isi,
            'nohp' => DB::table('h1')->where('id_h1', 13)->first()->isi,
            'email' => DB::table('h1')->where('id_h1', 14)->first()->isi,
            'maps' => DB::table('h1')->where('id_h1', 15)->first()->isi,
            'warna' => DB::table('h1')->where('id_h1', 16)->first()->isi,
            'warna_bg' => DB::table('h1')->where('id_h1', 17)->first()->isi,
    ];
    return view('components.navbar', $data);
})->name('home');

Route::get('/', [AppointmentController::class, 'home'])->name('home');
Route::get('appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('getKota', [AppointmentController::class, 'getKota'])->name('getKota');
Route::get('getKecamatan', [AppointmentController::class, 'getKecamatan'])->name('getKecamatan');
Route::get('getKelurahan', [AppointmentController::class, 'getKelurahan'])->name('getKelurahan');
Route::get('save_appointment', [AppointmentController::class, 'save_appointment'])->name('save_appointment');
Route::get('save_appointment2', [AppointmentController::class, 'save_appointment2'])->name('save_appointment2');
Route::get('appointment2', [AppointmentController::class, 'appointment2'])->name('appointment2');
Route::get('pernahDaftar', [AppointmentController::class, 'pernahDaftar'])->name('pernahDaftar');
Route::get('delAppointment', [AppointmentController::class, 'delAppointment'])->name('delAppointment');
Route::get('appointment_selesai', [AppointmentController::class, 'appointment_selesai'])->name('appointment_selesai');


Route::get('/isi_formulir', [Isiformulir::class, 'index'])->name('isi_formulir');
Route::get('/tbh_pertanyaan1', [Isiformulir::class, 'tbh_pertanyaan1'])->name('tbh_pertanyaan1');
Route::get('/dlt_pertanyaan1', [Isiformulir::class, 'dlt_pertanyaan1'])->name('dlt_pertanyaan1');

Route::get('/tbh_pertanyaan2', [Isiformulir::class, 'tbh_pertanyaan2'])->name('tbh_pertanyaan2');
Route::get('/dlt_pertanyaan2', [Isiformulir::class, 'dlt_pertanyaan2'])->name('dlt_pertanyaan2');

Route::get('/tbh_pertanyaan3', [Isiformulir::class, 'tbh_pertanyaan3'])->name('tbh_pertanyaan3');
Route::get('/dlt_pertanyaan3', [Isiformulir::class, 'dlt_pertanyaan3'])->name('dlt_pertanyaan3');

Route::get('/tbh_pertanyaan4', [Isiformulir::class, 'tbh_pertanyaan4'])->name('tbh_pertanyaan4');
Route::get('/dlt_pertanyaan4', [Isiformulir::class, 'dlt_pertanyaan4'])->name('dlt_pertanyaan4');


Route::get('/form1', [Isiformulir::class, 'form1'])->name('form1');
Route::get('/form2', [Isiformulir::class, 'form2'])->name('form2');
Route::get('/form3', [Isiformulir::class, 'form3'])->name('form3');
Route::get('/form4', [Isiformulir::class, 'form4'])->name('form4');
Route::get('/save_order', [Isiformulir::class, 'save_order'])->name('save_order');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
