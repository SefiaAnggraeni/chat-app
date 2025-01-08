@extends('layout')

@section('content')
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
</style>

<div class="container">
    <h2 style="color: #005C7B; font-weight: bold;">Tambah Kontak Darurat</h2>
    <form action="{{ route('insertkontak') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="number" name="telepon" placeholder="Nomor Telepon" required>
        <input type="text" name="alamat_shelter" placeholder="Alamat Shelter" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required minlength="6">
        <button type="submit" class="submit-btn">Tambah Kontak</button>
    </form>
</div>
@endsection
