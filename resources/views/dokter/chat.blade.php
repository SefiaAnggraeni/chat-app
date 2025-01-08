@extends('layout')
@section('sidebar')
<style>
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
    .table-header {
  background-color: #7EBEF1; /* Warna latar belakang */
  color: #fff; /* Warna teks */
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
                <a href="/dokter/home"  >
                  <img src="{{asset('assets/img/icon house.png')}}" 
                  style="width: 23px; height: 23px;"><span >Home</span>
                </a>
              </li> 
            <li><a href="artikel"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
            <a href="chat" class="active" >
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
    <h1>CHAT</h1>
    
</header>