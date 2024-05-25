<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TunjanganPegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.app');
})->name('dashboard');

//ROUTE PEGAWAI
Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawaiindex');
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit'])->name('editpegawai');
Route::get('/pegawai/create',[PegawaiController::class, 'create'])->name('createpegawai');
Route::post('/pegawai/store',[PegawaiController::class,'store'])->name('storepegawai');
Route::put('/pegawai/update/{id}',[PegawaiController::class, 'update'])->name('updatepegawai');
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus'])->name('hapuspegawai');
Route::get('/pegawai/destroy/{id}',[PegawaiController::class, 'destroy'])->name('destroypegawai');

//ROUTE JABATAN
Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatanindex');
Route::get('/jabatan/create/',[JabatanController::class,'create'])->name('createjabatan');
// routes/web.php
Route::post('/storejabatan', [JabatanController::class, 'store'])->name('storejabatan');
Route::get('/jabatan/{id}/edit', [JabatanController::class, 'edit'])->name('jabatanedit');
Route::put('/jabatan/{id}', [JabatanController::class, 'update'])->name('jabatanupdate');
// Route::get('/jabatan/hapus/{id}',[JabatanController::class,'hapus'])->name('hapusjabatan');
Route::delete('/jabatan/destroy/{id}',[JabatanController::class, 'destroy'])->name('destroyjabatan');
Route::get('/jabatan/pdf', [JabatanController::class, 'CetakPdf'])->name('jabatan.pdf');

//ROUTE ABSEN
Route::get('/absen',[AbsenController::class,'index'])->name('absenindex');
// Route::get('/absen/edit/{id}',[AbsenController::class,'edit'])->name('editabsen');
Route::get('/absen/create/{id}',[AbsenController::class,'create'])->name('createabsen');
Route::post('/storeabsen', [AbsenController::class, 'store'])->name('storeabsen');
Route::get('/absen/{id}/edit', [AbsenController::class, 'edit'])->name('absennedit');
Route::put('/absen/{id}', [AbsenController::class, 'update'])->name('absenupdate');

//ROUTE IJIN
Route::get('/ijin',[IjinController::class,'index'])->name('ijinindex');
Route::get('/ijin/edit/{id}',[IjinController::class,'edit'])->name('editijin');
Route::get('/ijin/create{id}',[IjinController::class,'create'])->name('createijin');

//ROUTE GAJI
Route::get('/gaji',[GajiController::class,'index'])->name('gajiindex');
Route::get('/editgaji/{id}',[GajiController::class,'edit'])->name('editgaji');
Route::get('/creategaji/{id}',[GajiController::class, 'create'])->name('creategaji');

//ROUTE Tunjangan
Route::get('/tunjangan',[TunjanganPegawaiController::class,'index'])->name('tunjanganindex');
Route::get('/tunjangan/edit/{id}',[TunjanganPegawaiController::class, 'edit'])->name('edittunjangan');
Route::get('/tunjangan/create/{id}',[TunjanganPegawaiController::class, 'create'])->name('createtunjangan');
Route::post('/tunjangan/store/{id}',[TunjanganPegawaiController::class,'store'])->name('storetunjangan');
Route::put('/tunjangan/update/{id}',[TunjanganPegawaiController::class, 'update'])->name('updatetunjangan');
Route::get('/tunjangan/hapus/{id}',[TunjanganPegawaiController::class,'hapus'])->name('hapustunjangan');
Route::get('/tunjangan/destroy/{id}',[TunjanganPegawaiController::class, 'destroy'])->name('destroytunjangan');