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
    }

    h2 {
        color: #005C7B;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

<nav class="navbar">
    <div class="navbar-left">
        <img src="{{ asset('assets/img/logo.png') }}" alt="CaremaL Logo" class="logo">
    </div>
    <div class="navbar-right">
        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="profil" class="profil">
        <span class="user-greeting">Hi, {{ session('name') }}</span>
        <a href="#" class="language-switch">EN</a>
    </div>
</nav>

<header id="header" class="header d-flex flex-column justify-content-center">
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/admin/artikel/daftarartikel" class="active"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
            <li><a href="/admin/kontak/daftarkontak"><i class="bi bi-telephone"></i><span>Kontak Darurat</span></a></li>
            <li><a href="/admin/doktor/daftardoktor"><i class="fa fa-user-md"></i><span>Doktor Hewan</span></a></li>
            <li><a href="/admin/datapuskeswans"><i class="bi bi-hospital"></i><span>Puskeswan</span></a></li>
        </ul>
    </nav>
</header>

<div class="container mt-5">
    <h2>DAFTAR ARTIKEL</h2>
    <div class="row justify-content-end mb-3">
        <div class="col-sm-4 text-end">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahArtikelModal">Tambah Artikel</a>
        </div>
    </div>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
       
                <tbody>
                @if (!isset($articles) || $articles->where('artikel_status', '!=', 'deleted')->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                @else
                    @foreach ($articles->where('artikel_status', '!=', 'deleted') as $index => $article)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $article->artikel_judul }}</td>
                            <td>{{ Str::limit($article->artikel_deskripsi, 50) }}</td>
                            <td>
                                @if($article->artikel_image)
                                    <img src="{{ asset('storage/' . $article->artikel_image) }}" alt="Gambar Artikel" style="width: 100px; height: auto;">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>{{ $article->artikel_status }}</td>
                            <td>
                                <a href="{{ route('editArtikel', $article->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('hapusArtikel', $article->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
             
    </table>
</div>

<!-- Modal Tambah Artikel -->
<div class="modal fade" id="tambahArtikelModal" tabindex="-1" aria-labelledby="tambahArtikelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container">
                <span class="close-btn" data-bs-dismiss="modal">&times;</span>
                <h2>TAMBAH ARTIKEL</h2>
                <form action="{{ route('insertArtikel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="artikel_judul" placeholder="Judul" required>
                    <textarea name="artikel_deskripsi" rows="4" placeholder="Deskripsi" required></textarea>
                    <input type="file" name="artikel_image" accept="image/*" required>
                    <button type="submit" class="submit-btn">Simpan Artikel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('webjars/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('webjars/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('webjars/bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    // Menutup modal dan kembali ke daftar artikel
    const closeBtns = document.querySelectorAll('.close-btn');
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            window.location.href = "/admin/artikel"; // Ganti dengan route yang sesuai
        });
    });
</script>

@endsection