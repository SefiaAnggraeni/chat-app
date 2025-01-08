<?php

namespace App\Http\Controllers;

use App\Models\Caremal;
use App\Models\Kontak;
use App\Models\Dokter;
use App\Models\shelter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CaremalController extends Controller
{
    public function dokter()
    {
        $data = Dokter::all();
        return view('admin/doktor/daftardoktor', compact('data'));
    }

    public function shelter()
    {
        $data = shelter::all();
        return view('admin/kontak/daftarkontak', compact('data'));
    }

    public function tambah()
    {
        $data = Dokter::all();
        return view('admin/doktor/tambahdoktor', compact('data'));
    }

    public function insert(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->to('admin/doktor/daftardoktor');
    }

    public function showForm()
    {
        return view('admin/kontak/tambahkontak');
    }

   
    public function editDoktor($id)
    {
        $dokter = Dokter::findOrFail($id);
        return response()->json($dokter);
    }

    public function updateDoktor(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tb_dokter,id',
            'dokter_nama' => 'required|string|max:255',
            'telepon' => 'required|numeric',
            'dokter_Ttl' => 'required|string|max:255',
            'dokter_JK' => 'required|in:laki-laki,perempuan',
            'dokter_NIK' => 'required|numeric|unique:tb_dokter,dokter_NIK,' . $request->id,
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:tb_dokter,email,' . $request->id,
        ]);

        $dokter = Dokter::findOrFail($request->id);
        $dokter->update([
            'dokter_nama' => $request->dokter_nama,
            'telepon' => $request->telepon,
            'dokter_Ttl' => $request->dokter_Ttl,
            'dokter_JK' => $request->dokter_JK,
            'dokter_NIK' => $request->dokter_NIK,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);

        return redirect()->route('daftardokter')->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function updatedata(Request $request, $id)
    {
        $data = Dokter::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        $data->update($request->all());
        return redirect()->route('admin.doktor.daftardoktor')->with('success', 'Data berhasil diupdate.');
    }

    public function tampilkandata($id)
    {
        $data = Dokter::find($id);
        return view('admin/doktor/editDoktorModal', compact('data'));
    }

    public function deletedata($id)
    {
        $data = Dokter::find($id);
        $data->delete();
        return redirect()->to('admin/doktor/daftardoktor');
    }

    public function deletedatakontak($id)
    {
        $data = Shelter::find($id);
        $data->delete();
        return redirect()->to('admin/kontak/daftarkontak');
    }
}
