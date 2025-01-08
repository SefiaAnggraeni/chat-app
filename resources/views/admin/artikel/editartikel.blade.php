@extends('layout')

@section('sidebar')
<style>
    input[type="text"], textarea, input[type="file"], select {
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

    h2 {
        color: #005C7B;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

<div class="container mt-5">
    <h2>EDIT ARTIKEL</h2>
    <form action="{{ route('updateArtikel', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="artikel_judul" value="{{ $article->artikel_judul }}" required>
        <textarea name="artikel_deskripsi" rows="4" required>{{ $article->artikel_deskripsi }}</textarea>
        
        <label>Gambar Saat Ini:</label><br>
        @if($article->artikel_image)
            <img src="{{ asset('storage/' . $article->artikel_image) }}" alt="Gambar Artikel" style="width: 150px; height: auto;">
        @else
            Tidak ada gambar
        @endif
        <br><br>
        
        <label>Ganti Gambar (Opsional):</label>
        <input type="file" name="artikel_image" accept="image/*">
        

        <button type="submit" class="submit-btn">Update Artikel</button>
    </form>
</div>

@endsection
