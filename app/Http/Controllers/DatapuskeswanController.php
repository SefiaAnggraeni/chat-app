<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapuskeswan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DatapuskeswanController extends Controller
{
    public function index() : View
    {
        $datapuskeswans = Datapuskeswan::latest()->paginate(10);

        return view('/admin/datapuskeswans.index', compact('datapuskeswans'));
    }

    public function create(): View
    {
        return view('/admin/datapuskeswans.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_puskeswan' => 'required|string',
            'deskripsi' => 'required|string',
            'hari1'=> 'required|string',
            'hari2'=> 'required|string',
            'jam_buka' => 'required|string',
            'jam_tutup' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten_kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan_desa' => 'required|string',
            'dusun' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'narahubung' => 'required|string',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/admin/datapuskeswans', $image->hashName());

        //create data
        Datapuskeswan::create([
            'image'                  => $image->hashName(),
            'nama_puskeswan'         => $request->nama_puskeswan,
            'deskripsi'              => $request->deskripsi,
            'hari1'                  => $request->hari1,
            'hari2'                 => $request->hari2,
            'jam_buka'              => $request->jam_buka,
            'jam_tutup'             => $request->jam_tutup,
            'provinsi'              => $request->provinsi,
            'kabupaten_kota'         => $request->kabupaten_kota,
            'kecamatan'             => $request->kecamatan,
            'kelurahan_desa'         => $request->kelurahan_desa,
            'dusun'                 => $request->dusun,
            'rt'                    => $request->rt,
            'rw'                    => $request->rw,
            'longitude'             => $request->longitude,
            'latitude'              => $request->latitude,
            'narahubung'             => $request->narahubung,
        ]);

        //redirect to index
        return redirect()->route('/admin/datapuskeswans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get product by ID
        $datapuskeswan = Datapuskeswan::findOrFail($id);

        //render view with product
        return view('/admin/datapuskeswans.show', compact('datapuskeswan'));
    }

    public function edit(string $id): View {
        $datapuskeswan = Datapuskeswan::findOrFail($id);

        return view('/admin/datapuskeswans.edit', compact('datapuskeswan'));
    }

    public function update(Request $request, $id): RedirectResponse {
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_puskeswan' => 'required|string',
            'deskripsi' => 'required|string',
            'hari1'=> 'required|string',
            'hari2'=> 'required|string',
            'jam_buka' => 'required|string',
            'jam_tutup' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten_kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan_desa' => 'required|string',
            'dusun' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'narahubung' => 'required|string',
        ]);

        $datapuskeswan = Datapuskeswan::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/admin/datapuskeswans', $image->hashName());
            Storage::delete('public/admin/datapuskeswans/'.$datapuskeswan->image);

            $datapuskeswan->update([
                'image'                  => $image->hashName(),
                'nama_puskeswan'         => $request->nama_puskeswan,
                'deskripsi'              => $request->deskripsi,
                'hari1'                  => $request->hari1,
                'hari2'                 => $request->hari2,
                'jam_buka'              => $request->jam_buka,
                'jam_tutup'             => $request->jam_tutup,
                'provinsi'              => $request->provinsi,
                'kabupaten_kota'         => $request->kabupaten_kota,
                'kecamatan'             => $request->kecamatan,
                'kelurahan_desa'         => $request->kelurahan_desa,
                'dusun'                 => $request->dusun,
                'rt'                    => $request->rt,
                'rw'                    => $request->rw,
                'longitude'             => $request->longitude,
                'latitude'              => $request->latitude,
                'narahubung'             => $request->narahubung,
            ]);
        } else {
            $datapuskeswan->update([
                'nama_puskeswan'         => $request->nama_puskeswan,
                'deskripsi'              => $request->deskripsi,
                'hari1'                  => $request->hari1,
                'hari2'                 => $request->hari2,
                'jam_buka'              => $request->jam_buka,
                'jam_tutup'             => $request->jam_tutup,
                'provinsi'              => $request->provinsi,
                'kabupaten_kota'         => $request->kabupaten_kota,
                'kecamatan'             => $request->kecamatan,
                'kelurahan_desa'         => $request->kelurahan_desa,
                'dusun'                 => $request->dusun,
                'rt'                    => $request->rt,
                'rw'                    => $request->rw,
                'longitude'             => $request->longitude,
                'latitude'              => $request->latitude,
                'narahubung'            => $request->narahubung,
            ]);
        }
        return redirect()->route('/admin/datapuskeswans.index')->with(['success' => 'Data berhasil DIubah']);
    }

    public function destroy($id): RedirectResponse
    {
        $datapuskeswan = Datapuskeswan::findOrFail($id);
        Storage::delete('public/admin/datapuskeswans/'. $datapuskeswan->image);
        $datapuskeswan->delete();
        return redirect()->route('/admin/datapuskeswans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
