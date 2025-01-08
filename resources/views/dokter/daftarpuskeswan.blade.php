@extends('layout')

@section('sidebar')

    <nav class="navbar">
      <div class="navbar-left">
        <img src="{{ asset('assets/img/logo.png') }}" alt="CaremaL Logo" class="logo">
          {{-- <span class="brand-name">CaremaL</span> --}}
      </div>
      <div class="navbar-right">
        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="profil" class="profil">
          <span class="user-greeting">Hi, {{ session('dokter_nama') }}</span>
          <a href="#" class="language-switch">EN</a>
      </div>
  </nav>
<header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li>
                <a href="/dokter/home"  >
                  <img src="{{asset('assets/img/icon house.png')}}" 
                  style="width: 23px; height: 23px;"><span >Home</span>
                </a>
              </li> 
            <li><a href="artikel" ><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
            <a href="chat" >
                <img src="{{asset('assets/img/ICON-CHAT.png')}}" 
                style="width: 24px; 
                height: 24px;"><span >Chatting</span>
              </a>
              <a href="daftarpuskeswan" class="active" >
                <img src="{{asset('assets/img/puskeswan-icon.png')}}" 
                style="width: 24px; 
                height: 24px;"><span >Puskeswan</span>
              </a>
            
        </ul>
    </nav>
</header>

<div class="container">
    <div class="row">
        <!-- Kolom "Alamat" -->
        <div class="alamat col-md-3 d-flex flex-column"> <!-- Kurangi ukuran kolom agar lebih kecil -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Default checked radio
                </label>
            </div>
        </div>

        <!-- Konten Puskeswan -->
        <div class="content col-md-9"> <!-- Kolom lebih lebar untuk konten utama -->
            <main>
                <h1>Puskeswan terpercaya di CaremaL</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>

                <div class="puskeswan-list">
                    <div class="puskeswan-card">
                        <img src="puskeswan1.jpg" alt="Puskeswan Kabat">
                        <div class="puskeswan-details">
                            <h2>Pusat Kesehatan Hewan Kabat</h2>
                            <p>Kabat, Kabupaten Banyuwangi</p>
                            <p>Jam Operasional : 07.30 - 20.00 (Buka)</p>
                            <p class="rating">⭐ 4.5 (150)</p>
                            <button class="detail-btn">Lihat detail</button>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak kartu jika diperlukan -->
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Styling -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f7f8;
        margin: 0;
        padding: 0;
    }

    .logo {
        width: 150px;
    }

    .search-bar {
        flex-grow: 1;
        margin: 0 20px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .user-profile {
        display: flex;
        align-items: center;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-left: 10px;
    }

    /* Sidebar */
    .header {
        position: fixed;
        width: 220px; /* Lebar sidebar dikurangi */
        height: 100%;
        background-color: #f4f4f4;
        z-index: 1000;
    }

    .navmenu {
        display: flex;
        flex-direction: column;
        margin-top: 80px;
    }

    .container {
        margin-left: 100px; /* Margin kiri untuk menyesuaikan lebar sidebar */
        padding: 20px;
    }

    .alamat {
        background-color: #e0f7fa;
        padding: 15px; /* Kurangi padding pada elemen radio */
    }

    .alamat .form-check {
        margin-bottom: 8px; /* Kurangi margin antara radio button */
    }

    .content {
        padding-left: 10px; /* Kurangi padding untuk konten */
    }

    /* Main Content */
    h1 {
        font-size: 24px;
        color: #333;
    }

    .puskeswan-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px; /* Kurangi jarak antar elemen puskeswan */
        margin-top: 10px;
    }

    .puskeswan-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px; /* Kurangi padding di dalam kartu */
        display: flex;
        align-items: flex-start;
    }

    .puskeswan-card img {
        width: 80px;  /* Kurangi ukuran gambar */
        height: auto;
        margin-right: 15px;
    }

    .puskeswan-details {
        flex-grow: 1;
    }

    .puskeswan-details h2 {
        font-size: 18px;
        color: #333;
        margin: 0 0 8px 0;
    }

    .puskeswan-details p {
        font-size: 14px;
        margin: 5px 0;
        color: #555;
    }

    .rating {
        font-size: 1.2em;
        color: #ff9800;
    }

    .detail-btn {
        padding: 8px 15px; /* Sesuaikan ukuran tombol */
        background-color: #03a9f4;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .detail-btn:hover {
        background-color: #0288d1;
    }

    /* Tambahkan gaya responsif untuk layar kecil */
    @media screen and (max-width: 768px) {
        .header {
            width: 100%;
        }

        .container {
            margin-left: 0;
        }

        .content {
            padding-left: 0;
        }
    }
</style>

@endsection

