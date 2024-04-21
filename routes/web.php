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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('login.register.auth')->group(function(){

    Route::livewire('/','index')->layout('app')->name('index');

});

Route::middleware('admin.auth')->group(function(){

    Route::livewire('/home','home.index')->layout('app')->name('home.index');

    Route::livewire('/profile/{username}','profile.index')->layout('app')->name('profile.index');
    Route::livewire('/profile/{username}/edit','profile.edit')->layout('app')->name('profile.edit');

    Route::livewire('/users','user.index')->layout('app')->name('users.index');
    Route::livewire('/users/create-user','user.create')->layout('app')->name('users.create');
    Route::livewire('/users/detail-user/{username}','user.edit')->layout('app')->name('users.edit');

    Route::livewire('/lecturers','dosen.index')->layout('app')->name('dosen.index');
    Route::livewire('/lecturers/create-lecturer','dosen.create')->layout('app')->name('dosen.create');
    Route::livewire('/lecturers/detail-lecturer/{username_dosen}','dosen.detail')->layout('app')->name('dosen.detail');
    Route::livewire('/lecturers/detail-lecturer/{username_dosen}/edit','dosen.edit')->layout('app')->name('dosen.edit');

    Route::livewire('/kartu-rencana-studi','krs.index')->layout('app')->name('krs.index');
    Route::livewire('/kartu-rencana-studi/create-krs','krs.create')->layout('app')->name('krs.create');
    Route::livewire('/kartu-rencana-studi/detail-krs/{krs_id}','krs.detail')->layout('app')->name('krs.detail');
    Route::livewire('/kartu-rencana-studi/detail-krs/{krs_id}/edit','krs.edit')->layout('app')->name('krs.edit');

    Route::livewire('/fakultas','pa-fakultas.index')->layout('app')->name('pa-fakultas.index');
    Route::livewire('/fakultas/create-fakultas','pa-fakultas.create')->layout('app')->name('pa-fakultas.create');
    Route::livewire('/fakultas/detail-fakultas/{fakultas_slug}','pa-fakultas.detail')->layout('app')->name('pa-fakultas.detail');
    Route::livewire('/fakultas/detail-fakultas/{fakultas_slug}/edit','pa-fakultas.edit')->layout('app')->name('pa-fakultas.edit');

    Route::livewire('/jurusan','pa-jurusan.index')->layout('app')->name('pa-jurusan.index');
    Route::livewire('/jurusan/create-jurusan','pa-jurusan.create')->layout('app')->name('pa-jurusan.create');
    Route::livewire('/jurusan/detail-jurusan/{jurusan_slug}','pa-jurusan.detail')->layout('app')->name('pa-jurusan.detail');
    Route::livewire('/jurusan/detail-jurusan/{jurusan_slug}/edit','pa-jurusan.edit')->layout('app')->name('pa-jurusan.edit');

    Route::livewire('/kartu-hasil-studi','pa-khs.index')->layout('app')->name('pa-khs.index');
    Route::livewire('/kartu-hasil-studi/create-khs','pa-khs.create')->layout('app')->name('pa-khs.create');
    Route::livewire('/kartu-hasil-studi/detail-khs/{khs_id}','pa-khs.detail')->layout('app')->name('pa-khs.detail');
    Route::livewire('/kartu-hasil-studi/detail-khs/{khs_id}/edit','pa-khs.edit')->layout('app')->name('pa-khs.edit');

    Route::livewire('/kelas','pa-kelas.index')->layout('app')->name('pa-kelas.index');
    Route::livewire('/kelas/create-kelas','pa-kelas.create')->layout('app')->name('pa-kelas.create');
    Route::livewire('/kelas/detail-kelas/{kelas_id}','pa-kelas.detail')->layout('app')->name('pa-kelas.detail');
    Route::livewire('/kelas/detail-kelas/{kelas_id}/edit','pa-kelas.edit')->layout('app')->name('pa-kelas.edit');

    Route::livewire('/periode-tahun-kuliah','pa-periode-kuliah.index')->layout('app')->name('pa-periode-kuliah.index');
    Route::livewire('/periode-tahun-kuliah/create-periode','pa-periode-kuliah.create')->layout('app')->name('pa-periode-kuliah.create');
    Route::livewire('/periode-tahun-kuliah/detail-periode/{periode_kuliah_slug}','pa-periode-kuliah.detail')->layout('app')->name('pa-periode-kuliah.detail');
    Route::livewire('/periode-tahun-kuliah/detail-periode/{periode_kuliah_slug}/edit','pa-periode-kuliah.edit')->layout('app')->name('pa-periode-kuliah.edit');

});

Route::middleware('dosen.auth')->group(function(){

    Route::livewire('/halaman-dosen/home','user-dosen.home.index')->layout('app')->name('user-dosen.home.index');
    
});

Route::middleware('mahasiswa.auth')->group(function(){

    Route::livewire('/halaman-mahasiswa/home','user-mahasiswa.home.index')->layout('app')->name('user-mahasiswa.home.index');

    Route::livewire('/halaman-mahasiswa/profile/{username}','user-mahasiswa.profile.index')->layout('app')->name('user-mahasiswa.profile.index');
    Route::livewire('/halaman-mahasiswa/profile/{username}/edit','user-mahasiswa.profile.edit')->layout('app')->name('user-mahasiswa.profile.edit');

    Route::livewire('/halaman-mahasiswa/kartu-rencana-studi','user-mahasiswa.krs.index')->layout('app')->name('user-mahasiswa.krs.index');
    Route::livewire('/halaman-mahasiswa/kartu-rencana-studi/create-krs','user-mahasiswa.krs.create')->layout('app')->name('user-mahasiswa.krs.create');


});

