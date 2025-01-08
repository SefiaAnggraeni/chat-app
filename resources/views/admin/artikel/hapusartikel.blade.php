@extends('layout')

@section('sidebar')
<style>
    .confirm-box {
        max-width: 600px;
        margin: 100px auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-align: center;
    }

    .confirm-btn {
        padding: 10px 20px;
        margin: 10px;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-yes {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-no {
        background-color: #6c757d;
        color: #fff;
    }
</style>

<div class="confirm-box">
    <h2>Konfirmasi Hapus Artikel</h2>
    <p>Apakah Anda yakin ingin menghapus artikel <b>{{ $article->artikel_judul }}</b>?</p>

    <form action="{{ route('deleteArtikel', $article->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="confirm-btn btn-yes">Ya, Hapus</button>
        <a href="{{ route('daftarArtikel') }}" class="confirm-btn btn-no">Tidak, Kembali</a>
    </form>
</div>
@endsection
