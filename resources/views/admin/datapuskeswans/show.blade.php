<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
        />
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <style type="text/css">
            #map {
            height: 450px;
            width: 300px;
            margin-right:10px;
            border-radius:15px;
            }
        </style>

        <title>Detail Puskeswan</title>
    </head>
    <body style="background: #EDFDFB">
        <div style="position:absolute;">
            <div class="card-body">
                <img src="{{ asset('/storage/datapuskeswans/'.$datapuskeswan->image) }}" class="rounded" style="width:900px;height:450px;margin-left:30px;margin-top:50px;border-radius:15px;">
            </div>
            <div class="nama_puskeswan" style="margin-left:45px;">
                <h2>{{ $datapuskeswan->nama_puskeswan }}</h2>
            </div>
            <div class="lokasi" style="margin-left:45px;opacity:80%">
                <h5>{{ $datapuskeswan->provinsi }}, {{ $datapuskeswan->kabupaten_kota }}</h5>
            </div>
            <div class="deskripsi">
                <h4 style="margin-left:45px;margin-top:35px;">Deskripsi</h4>
                <h6 style="margin-left:45px;opacity:70%">{{ $datapuskeswan->deskripsi }}</h6>
            </div>
            <div class="jam-operasional">
            <h4 style="margin-left:45px;margin-top:35px;">Jam Operasional</h4>
            <h6 style="margin-left:45px;">{{ $datapuskeswan->hari1 }} - {{ $datapuskeswan->hari2 }}   :   {{ $datapuskeswan->jam_buka }} - {{ $datapuskeswan->jam_tutup }}</h6>
            </div>
            <div class="narahubung">
            <h4 style="margin-left:45px;margin-top:35px;">Narahubung</h4>
            <h6 style="margin-left:45px;">{{ $datapuskeswan->narahubung }}</h6>
            </div>
            <div class="container mt-5">
                <div id="map" style="position:absolute;left:950px;top:550px;"></div>
            </div>
            <script type="text/javascript">
                function initMap() {
                    const myLatLng = { lat: {{ $datapuskeswan->longitude }}, lng: {{ $datapuskeswan->latitude }} };
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 5,
                        center: myLatLng,
                    });
                    new google.maps.Marker({
                        position: myLatLng,
                        map,
                    });
                }
                window.initMap = initMap;
            </script>
            <script type="text/javascript"
                src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" >
            </script>
            <div>
                <h6 id="alamat-map" style="position:absolute;left:950px;top:1000px;">{{ $datapuskeswan->dusun }},RT{{ $datapuskeswan->rt }}/RW{{ $datapuskeswan->rw }}, {{ $datapuskeswan->kelurahan_desa }}, {{ $datapuskeswan->kecamatan }}, {{ $datapuskeswan->kabupaten_kota }}, {{ $datapuskeswan->provinsi }}</h6>
            </div>
        </div>
    </body>
</html>