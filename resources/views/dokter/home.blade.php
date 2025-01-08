@extends('layout')
@section('sidebar')
<style>
    .navbar {
    z-index: 9999;
}
.navmenu{
    z-index: 9999;
}
    input[type="text"], input[type="email"], input[type="password"], input[type="number"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #7EBEF1;
        border-radius: 25px;
        font-size: 15px;
        outline: none;
        font-family: 'Poppins';
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #7EBEF1;
        color: #fff;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #6aaae4;
    }

    .form-select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #7EBEF1;
        border-radius: 25px;
        font-size: 15px;
        outline: none;
        font-family: 'Poppins';
    }

    .terms {
        font-size: 0.7rem;
        text-align: center;
        color: #888;
        margin-top: 10px;
    }

    .terms a {
        color: #7EBEF1;
        text-decoration: none;
    }

    .terms a:hover {
        text-decoration: underline;
    }

    .modal-content {
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        color: #7EBEF1;
        cursor: pointer;
    }

    h2 {
        text-align: left; /* Perbaikan text alignment */
        font-size: 1.5rem;
        color: #1a1a1a;
        margin-bottom: 20px;
    }



/* Header container untuk memusatkan konten */
.header-container {
    text-align: center;
    max-width: 100%;
    padding: 20px;
}


/* Memastikan title di tengah secara vertikal dan horizontal */
.main-title {
    position: absolute;
                width: 416px;
                height: 108px;
                left: 500px;
                top: 105px;
                font-weight: bold;
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                font-size: 88.9412px;
                line-height: 108px;
                
                background-clip: text;
                text-fill-color: transparent;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 88.9412px;
    line-height: 108px;
    background: linear-gradient(90deg, #1CE7BC 0%, #7EBEF1 50%, #5586ED 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 10px; /* Beri sedikit jarak dengan rectangle */
}


/* Rectangle yang berada di bawah judul */
.rectangle-a {

    width: 200px;
    height: 28px;
    background: rgba(126, 190, 241, 0.5);
    margin: 0 auto;
    left: 370px; /* Untuk membuatnya di tengah */
                top: 170px; /* Mengatur jarak vertikal di bawah teks */
                transform: translateX(-50%); /* Menyelaraskan secara horizontal ke tengah */
                background: rgba(126, 190, 241, 0.5);
                z-index: 1; /* Dibawah teks */
}

/* Subtitle di bawah rectangle */
.subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 36px;
    line-height: 65px;
    color: rgba(6, 17, 19, 0.9);
    margin-top: 20px;
}

/* Tombol CTA untuk darurat */
.cta-button {
    margin-top: 20px;
}


</style>
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
                <a href="/dokter/home"  class="active">
                  <img src="{{asset('assets/img/icon house.png')}}" 
                  style="width: 23px; height: 23px;"><span >Home</span>
                </a>
              </li> 
            <li><a href="artikel"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
            <a href="chat" >
                <img src="{{asset('assets/img/ICON-CHAT.png')}}" 
                style="width: 24px; 
                height: 24px;"><span >Chatting</span>
              </a>
              <a href="daftarpuskeswan" >
                <img src="{{asset('assets/img/puskeswan-icon.png')}}" 
                style="width: 24px; 
                height: 24px;"><span >Puskeswan</span>
              </a>
            
        </ul>
    </nav>
    <header id="header" class="header">
        <div class="header-container">
            <h1 class="main-title">CaremaL</h1>
            <div class="rectangle-a"></div>
            <div class="subtitle">
                Nam sollicitud nunc, cursus eros vulputate sed. Vestibulum lobortis.
            </div>
            <div class="cta-button">
                <a href="#" class="cta-btn">KONTAK DARURAT</a>
                <img class="call_darurat" src="assets/img/call darurat.png" alt="..." />
            </div>
        </div>
    </header>
    
</header>