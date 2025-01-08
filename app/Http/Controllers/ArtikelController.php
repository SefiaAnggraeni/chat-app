<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPublic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    public function daftarArtikel()
    {
        $articles = ArtikelPublic::all();
        return view('admin.artikel.daftarartikel', compact('articles'));
    }

    // Menampilkan form untuk menambah artikel
    public function tambah()
    {
        return view('admin.artikel.tambahartikel');
    }

    // Menyimpan artikel baru
    public function insertArtikel(Request $request)
    {
        $validatedData = $request->validate([
            'artikel_judul' => 'required|string|max:255',
            'artikel_deskripsi' => 'required|string',
            'artikel_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('artikel_image')) {
            $validatedData['artikel_image'] = $request->file('artikel_image')->store('artikel_images', 'public');
        }

        ArtikelPublic::create(array_merge($validatedData, ['artikel_status' => 'waiting']));

        return redirect()->route('daftarArtikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $article = ArtikelPublic::findOrFail($id);
        return view('admin.artikel.editartikel', compact('article'));
    }

    // Update artikel
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'artikel_judul' => 'required|string|max:255',
            'artikel_deskripsi' => 'required|string',
            'artikel_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $article = ArtikelPublic::findOrFail($id);
    
        // Update judul dan deskripsi
        $article->artikel_judul = $validatedData['artikel_judul'];
        $article->artikel_deskripsi = $validatedData['artikel_deskripsi'];
    
        // Update gambar jika ada upload baru
        if ($request->hasFile('artikel_image')) {
            // Hapus gambar lama jika ada
            if ($article->artikel_image && Storage::disk('public')->exists($article->artikel_image)) {
                Storage::disk('public')->delete($article->artikel_image);
            }
    
            // Simpan gambar baru di folder img
            $path = $request->file('artikel_image')->store('img', 'public');
            $article->artikel_image = $path;
        }
    
        // Simpan perubahan
        $article->save();
    
        return redirect()->route('daftarArtikel')->with('success', 'Artikel berhasil diperbarui!');
    }
    

    public function konfirmasiHapus($id)
    {
        $article = ArtikelPublic::findOrFail($id);
        return view('admin.artikel.hapusartikel', compact('article'));
    }

    public function hapusArtikel(Request $request, $id)
    {
        $article = ArtikelPublic::findOrFail($id);
        $article->artikel_status = 'deleted';  // Ubah status menjadi 'deleted' sebagai soft delete
        $article->save();

        return redirect()->route('daftarArtikel')->with('success', 'Artikel berhasil dihapus dari daftar.');
    }
}