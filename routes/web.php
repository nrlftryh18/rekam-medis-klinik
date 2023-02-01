<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\HasilpemeriksaanController;

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
    return view('welcome');
});

Route::get('/pasien',[PasienController:: class, 'index'])->name('pasien');
Route::get('/datapasien',[PasienController:: class, 'index'])->name('datapasien');
Route::get('/tambahdata',[PasienController:: class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[PasienController:: class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[PasienController:: class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PasienController:: class, 'updatedata'])->name('updatedata');

Route::get('/cekup',[CekupController:: class, 'index'])->name('cekup');
Route::get('/datacekup',[CekupController:: class, 'index'])->name('datacekup');
Route::get('/tambahcekup',[CekupController:: class, 'tambahcekup'])->name('tambahcekup');
Route::post('/insertdatacekup',[CekupController:: class, 'insertdatacekup'])->name('insertdatacekup');
Route::get('/insertdatacekup',[CekupController:: class, 'insertdatacekup'])->name('insertdatacekup');

Route::get('/tampilkancekup/{id}',[CekupController:: class, 'tampilkancekup'])->name('tampilkancekup');
Route::post('/updatedatacekup/{id}',[CekupController:: class, 'updatedatacekup'])->name('updatedatacekup');


Route::get('/hasilpemeriksaan',[HasilpemeriksaanController:: class, 'index'])->name('hasilpemeriksaan');
Route::get('/tambahhasilpemeriksaan',[HasilpemeriksaanController:: class, 'tambahhasilpemeriksaan'])->name('tambahhasilpemeriksaan');
Route::post('/insertdatahasil',[HasilpemeriksaanController:: class, 'insertdatahasil'])->name('insertdatahasil');


Route::get('/login',[LoginController:: class, 'login'])->name('login');
Route::post('/loginproses',[LoginController:: class, 'loginproses'])->name('loginproses');
Route::get('/register',[LoginController:: class, 'register'])->name('register');
Route::post('/registeruser',[LoginController:: class, 'registeruser'])->name('registeruser');
