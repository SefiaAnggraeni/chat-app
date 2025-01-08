<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaremalController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MasyarakatController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'landing'])->name('landing');
Route::get('/artikel', [ArtikelController::class, 'artikel'])->name('artikel');

// Route untuk autentikasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk chatting (hanya dapat diakses jika sudah login)
// Route::middleware('auth')->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('chat.send');
    Route::get('/messages/{receiverId}', [ChatController::class, 'getMessages'])->name('chat.messages');
// });

Route::get('/admin/kontak/daftarkontak', function () {
    return view('admin/kontak/daftarkontak');
});


Route::get('/admin/daftarpuskeswan', function () {
    return view('admin/daftarpuskeswan');
});

// Route untuk menampilkan form edit
Route::get('admin/doktor/editDoktorModal/{id}', [CaremalController::class, 'edit'])->name('dokter.edit');

// Route untuk update data dokter
Route::put('/admin/doktor/update', [CaremalController::class, 'updateDoktor'])->name('updateDoktor');

// (Opsional) Route untuk mendapatkan data dokter berdasarkan ID
Route::get('/admin/doktor/{id}/edit', [CaremalController::class, 'editDoktor'])->name('editDoktor');

// Route untuk update data dokter
Route::put('admin/dokter/update/{id}', [CaremalController::class, 'update'])->name('editDoktorModal');
Route::put('/admin/doktor/daftardoktor', [CaremalController::class, 'dokter'] )->name('editdokter');

Route::get('/admin/doktor/daftardoktor', [CaremalController::class, 'dokter'] )->name('daftardokter');

Route::get('/admin/kontak/tambahkontak', [CaremalController::class, 'showForm'])->name('kontak.form');
Route::post('/admin/kontak/insertkontak', [CaremalController::class, 'store'])->name('insertkontak');


Route::get('/admin/kontak/daftarkontak', [CaremalController::class, 'shelter'] )->name('event');
Route::get('/tambah', [CaremalController::class, 'tambah'] )->name('tambah');
Route::post('/insert', [CaremalController::class, 'insert'] )->name('insert');
Route::post('/admin/artikel/insertArtikel', [ArtikelController::class, 'insertArtikel'] )->name('insertArtikel');
Route::post('/insertkontak', [CaremalController::class, 'insertkontak'] )->name('insertkontak');
Route::get('/deletedata/{id}', [CaremalController::class, 'deletedata'] )->name('deletedata');
Route::get('/deletedatakontak/{id}', [CaremalController::class, 'deletedatakontak'] )->name('deletedatakontak');
Route::put('/updatedata/{id}', [CaremalController::class, 'updatedata'])->name('updatedata');
Route::get('/tampilkandata/{id}', [CaremalController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/admin/artikel/artikel', [ArtikelController::class, 'tambah'])->name('tambah');
Route::get('/admin/artikel/daftarartikel', [ArtikelController::class, 'daftarArtikel'])->name('daftarArtikel');

Route::get('/admin/artikel/editartikel/{id}', [ArtikelController::class, 'edit'])->name('editArtikel');
Route::put('/admin/artikel/update/{id}', [ArtikelController::class, 'update'])->name('updateArtikel');
Route::get('/admin/artikel/hapus/{id}', [ArtikelController::class, 'konfirmasiHapus'])->name('hapusArtikel');
Route::delete('/admin/artikel/delete/{id}', [ArtikelController::class, 'hapusArtikel'])->name('deleteArtikel');


Route::get('/admin/artikel', [ArtikelController::class, 'tambah'])->name('tambahArtikel');
Route::post('/admin/artikel', [ArtikelController::class, 'insertArtikel'])->name('insertArtikel');
Route::resource('/admin/datapuskeswans', \App\Http\Controllers\DatapuskeswanController::class);


// Dokter
Route::get('/dokter/home', [DokterController::class, 'index'])->name('dokterhome');
Route::get('/dokter/artikel', [DokterController::class, 'artikel'])->name('dokterartikel');
Route::get('/dokter/daftarpuskeswan', [DokterController::class, 'puskeswan'])->name('pukeswan');
Route::get('/dokter/chat', [DokterController::class, 'chat'])->name('chat');


//Masyarakat
Route::get('/masyarakat/home', [MasyarakatController::class, 'index'])->name('masyarakatrhome');
Route::get('/masyarakat/artikel', [MasyarakatController::class, 'artikel'])->name('masyarakatartikel');
Route::get('/masyarakat/daftarpuskeswan', [MasyarakatController::class, 'puskeswan'])->name('puskeswan');
Route::get('/masyarakat/chat', [MasyarakatController::class, 'chat'])->name('chat');


