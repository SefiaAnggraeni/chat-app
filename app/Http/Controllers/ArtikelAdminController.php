<?php

namespace App\Http\Controllers;

use App\Models\ArtikelAdmin;
use Illuminate\Http\Request;

class ArtikelAdminController extends Controller
{
    public function index()
    {
        $artikels = ArtikelAdmin::all();
        return view('admin.artikel.index', compact('artikels'));
    }

    // menampilkan form tambah artikel
    public function create()
    {
        return view('admin.artikel.create');
    }

    //menampilkan form tambah artikel
    public function crate()
    {
        return view('admin.artikel.create');
    }

    //menyimpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'artikel_image' => 'required|string|max:225',
            'artikel_teks' => 'required|string',
            'artikel_status' => 'required|string',
        ]);

        return redirect()->route('admin.artikel')->with('succes', 'Artikel berhasil ditambahkan!');
    }

    // menampilkan form edit artikel
    public function edit($id)
    {
        $artikel = ArtikelAdmin::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    // update artikel yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'artikel_image' => 'required|string|max:225',
            'artikel_teks' => 'required|string',
            'artikel_status' => 'required|string',
        ]);

        $artikel = ArtikelAdmin::finfOrFail($id);
        $artikel->upate([
            'artikel_image' => $request->artikel_image,
            'artikel_teks' => $request->artikel_teks,
            'artikel_status' => $request->artikel_status,
        ]);

        return redirect()->route('admin.artikel')->with('succes', 'Artikel berhasil diupdate!');
    }

    // menghapus artikel

    public function destroy($id)
    {
        $artikel = ArtikelAdmin::findOrFail($id);
        $artikel->delete();

        return redirect()->route('admin.artikel')->with('succes', 'Artikel berhasil dihapus!');
    }
}
