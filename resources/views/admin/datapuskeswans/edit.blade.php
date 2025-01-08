<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #EDFDFB">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('datapuskeswans.update', $datapuskeswan->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" for="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image', $datapuskeswan->image)}}">
                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_puskeswan" class="form-label">Nama Puskeswan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="provinsi"
                                    name="nama_puskeswan"
                                    value="{{old('nama_puskeswan', $datapuskeswan->nama_puskeswan)}}"
                                    placeholder="Masukkan Nama Puskeswan (cth : Puskeswan Sejahtera)"/>
                                @error('nama_puskeswan')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea
                                    type="text"
                                    for="deskripsi"
                                    class="form-control"
                                    id="deskripsi"
                                    name="deskripsi"
                                    rows="5"
                                    placeholder="Masukkan deskripsi">{{old('deskripsi', $datapuskeswan->deskripsi)}}</textarea>
                                @error('deskripsi')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <label for="waktuoperasional" class="form-label">Waktu Operasional</label>
                            <div class="row gy-2 gx-3 align-items-center">
                                <div class="col-auto">
                                    <select class="form-select" for="inputhari1" aria-label="hari1" name="hari1" id="hari1">
                                        <option value="hari">{{old('hari1', $datapuskeswan->hari1)}}</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                    @error('hari1')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-auto">
                                    <h3>-</h3>
                                </div>
                                    <div class="col-auto" class="form-select">
                                    <select class="form-select" for="inputhari2" aria-label="hari2" name="hari2" id="hari2">
                                        <option value="hari">{{old('hari2', $datapuskeswan->hari2)}}</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                        @error('hari2')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                            <div class="col-auto">
                                <input type="time" for="jam_buka" class="form-control" id="jam_buka" name="jam_buka" value="{{old('jam_buka', $datapuskeswan->jam_buka)}}" />
                                @error('jam_buka')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-auto">
                                <h3>-</h3>
                            </div>
                            <div class="col-auto">
                                <input type="time" for="jam_tutup" class="form-control" id="jam_tutup" name="jam_tutup" value="{{old('jam_tutup', $datapuskeswan->jam_tutup)}}" />
                                @error('jam_tutup')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div>
                                <h4>Alamat</h4>
                            </div>

                            <div class="row">
                            <div class="col-md">
                                    <label for="inputprovinsi" class="form-label">Provinsi</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="provinsi"
                                        id="provinsi"
                                        value="{{old('provinsi', $datapuskeswan->provinsi)}}"
                                        placeholder="Masukkan Kabupaten/Kota (cth : Kabupaten Banyuwangi)"/>
                                    @error('provinsi')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label for="inputkabupatenkota" class="form-label">Kabupaten/Kota</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="kabupaten_kota"
                                        id="kabupaten_kota"
                                        value="{{old('kabupaten_kota', $datapuskeswan->kabupaten_kota)}}"
                                        placeholder="Masukkan Kabupaten/Kota (cth : Kabupaten Banyuwangi)"/>
                                    @error('kabupaten_kota')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <label for="inputkecamatan" class="form-label">Kecamatan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="kecamatan"
                                        id="kecamatan"
                                        value="{{old('kecamatan', $datapuskeswan->kecamatan)}}"
                                        placeholder="Masukkan Kecamatan (cth : Kecamatan Kabat)"/>
                                    @error('kecamatan')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label for="inputkelurahandesa" class="form-label">Kelurahan/Desa</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="kelurahan_desa"
                                        id="kelurahan_desa"
                                        value="{{old('kelurahan_desa', $datapuskeswan->kelurahan_desa)}}"
                                        placeholder="Masukkan Kelurahan/Desa (cth : Kelurahan Labanasem)"/>
                                    @error('kelurahan_desa')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <label for="inputdusun" class="form-label">Dusun</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="dusun"
                                        id="dusun"
                                        value="{{old('dusun', $datapuskeswan->dusun)}}"
                                        placeholder="Masukkan Dusun (cth : Dusun Labanasem)"
                                    />
                                    @error('dusun')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label for="inputrt" class="form-label">RT</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="rt"
                                        id="rt"
                                        value="{{old('rt', $datapuskeswan->rt)}}"
                                        placeholder="Masukkan RT (cth : RT 06)"
                                    />
                                    @error('rt')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label for="inputrw" class="form-label">RW</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="rw"
                                        id="rw"
                                        value="{{old('rw', $datapuskeswan->rw)}}"
                                        placeholder="Masukkan RW (cth : RW 07)"
                                    />
                                    @error('rw')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Latitude</label>
                                <input type="text" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude', $datapuskeswan->longitude) }}" placeholder="Masukkan Judul Product">
                                <!-- error message untuk description -->
                                @error('longitude')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Longitude</label>
                                <input type="text" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude', $datapuskeswan->latitude) }}" placeholder="Masukkan latitude">
                            
                                <!-- error message untuk description -->
                                @error('latitude')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_puskeswan" class="form-label">Narahubung</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="narahubung"
                                    name="narahubung"
                                    value="{{old('narahubung', $datapuskeswan->narahubung)}}"
                                    placeholder="Masukkan Nama Puskeswan (cth : Puskeswan Sejahtera)"/>
                                @error('narahubung')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">EDIT</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>