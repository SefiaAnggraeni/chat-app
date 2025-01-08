<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaremaL</title>

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> <!--ini untuk mengatur layout nya biar rapi -->
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> 
    <style>

        /* Global Styles */
        body {
            /* padding-top: 30px;  */
            /* Sesuaikan dengan tinggi navbar */
            /* padding-left: 100px;
            padding-right: 20px;
            background-color: #EDFDFB; */
            font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
        }
        a {
    text-decoration: none;
    color: #000;
}
        /* Navbar */
        .navbar {
            position: fixed; /* Membuat navbar tetap berada di bagian atas */
            top: 0; /* Posisi di bagian atas halaman */
            left: 0; /* Mulai dari kiri halaman */
            width: 100%; /* Membuat navbar selebar halaman */
            display: flex;
            justify-content: space-between; /* Memastikan logo di kiri dan elemen lainnya di kanan */
            align-items: center;
            padding: 10px 20px; /* Menambah padding kanan agar lebih menjorok ke kanan */
            background-color: #EDFDFB;
        }
        @media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        text-align: center;
    }

    .navbar-left, .navbar-right {
        margin-bottom: 10px;
    }
}

        .navbar .logo {
            width: 200px;
            height: 55px;
        }

        .navbar .menu {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: 550px;
            /* Menu tetap di sebelah kanan logo*/
        }

        .masuk {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            font-weight: 500;
            color: #005C7B;
            text-decoration: none;
            line-height: 21px;
            margin-right: 10px; /* Jarak antar item di menu */
        }

        .navbar .menu a:last-child {
            text-decoration: underline;
        }

        .daftar-btn {
            background: #7EBEF1;
            box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.12);
            border-radius: 10px;
            width: 120px;
            height: 40px;
            display: flex;
            color: white;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            margin-right: 10px; /* Jarak tombol dari menu */
        }


        .language-switch {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
            text-decoration: none;
            font-size: 14px;
            color: #005C7B;
            border-left: 1px solid #ccc;
            padding-left: 10px;
            margin-right: 0; /* Menghilangkan jarak kiri berlebih */
        }

        .language-switch:hover {
            text-decoration: underline;
        }

       /* Header */
       .header-container {
            position: relative;
            width: 100%;
            height: 800px;
        }
            .main-title {
                position: absolute;
                width: 416px;
                height: 108px;
                left: 270px;
                top: 105px;
                font-weight: bold;
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                font-size: 88.9412px;
                line-height: 108px;
                background: linear-gradient(90deg, #1CE7BC 0%, #7EBEF1 50%, #5586ED 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
            }
            .rectangle-a {
                position: absolute;
                width: 200px;
                height: 28px;
                left: 370px; /* Untuk membuatnya di tengah */
                top: 170px; /* Mengatur jarak vertikal di bawah teks */
                transform: translateX(-50%); /* Menyelaraskan secara horizontal ke tengah */
                background: rgba(126, 190, 241, 0.5);
                z-index: 1; /* Dibawah teks */
            }

            .subtitle {
                position: absolute;
                left: 250x;
                right: 35.35%;
                top: 230px;
                margin-left: 190px;
                margin-bottom: 80.69%;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 36px;
                line-height: 65px;
                
                text-align: center;
                color: rgba(6, 17, 19, 0.9);
            }
            .navbar {
    z-index: 9999;
}

            .cta-button {
                position: absolute;
                width: 323px;
                height: 82px;
                left: 270px;
                top: 400px;
                margin-left: 60px;
                border-radius: 10px;
                background: #7EBEF1;
                box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.12);
                border-radius: 10px;
                color: #FFFFFF;
                font-family: 'Poppins', sans-serif;
                font-weight: 300;
                font-size: 22px;
                line-height: 33px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .cta-btn {
                color: #FFFFFF;
                font-family: 'Poppins', sans-serif;
                font-weight: 300;
                font-size: 22px;
                line-height: 33px;
            }
            .call-darurat {
                margin-left: 10px;
            }

            .mockup-container {
                position: absolute;
                width: 692px;
                height: 692px;
                left: 717px;
                top: 100px;
            }
            .mockup-container img {
                width: 600px;
                height: 650px;
                margin-right: 20px;
                /*top: 100px;*/
                
            }

            
        .search-bar {
            display: flex;
            align-items: center;
            background: #FFFFFF;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
            border-radius: 55px;
            padding: 10px 20px;
            position: absolute;
            width: 901px;
            height: 43px;
            margin-left: 68px;
            top: 986px;
            margin-right: 50px;
        }
        
        .search-bar input {
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 20px;
            color: rgba(6, 17, 19, 0.33);
            flex-grow: 1;
        }

        .search-bar img {
            width: 20px;
            height: 20px;
        }


        /* Articles Section */
        .articles {
            display: flex;
            justify-content: space-around;
            margin-top: 300px;
            padding: 10px;
        }

        .articles .article {
            background-color: white;
            left: 0%;
            right: 72.76%;
            bottom: 100%;
            width: 100%;
            padding: 20px;
            margin-right: 50px;
            background: #FFFFFF;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            border-radius: 20px;

        }

        .articles .article img {
            width: 100%;
            border-radius: 10px;
            
        }

        .articles .article h2 {
            font-size: 24px;
            color: #005C7B;
        }

        .articles .article p {
            font-size: 14px;
            color: #005C7B;
        }

        .artikel-info {
            position: absolute;
            width: 180px;
            height: 68px;
            margin-left: 68px;
            top: 826px;
            font-family: 'Poppins';
            font-weight: bold;
            font-style: normal;
            font-weight: 700;
            font-size: 45px;
            color: #005C7B;
        }

        .description {
            position: absolute;
            width: 919px;
            height: 45px;
            margin-left: 68px;
            top: 896px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 275;
            font-size: 30px;
            color: rgba(0, 92, 123, 0.5);
        }
        .btn-selanjutnya {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            width: 200px;
            height: 60px;
            left: 43.06%;
            right: 43.06%;
            margin-top: 100px;
            bottom: 23.83%;
            border: 1.4px solid #458FF6;
            border-radius: 55px;
            font-family: 'Mulish', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #458FF6;
            cursor: pointer;
        }
        /*effect*/
        .btn-lebih-lanjut:hover {
                background-color: #458FF6;
                color: white;
            }
            .sidebar {
        position: fixed;
        top: 100px;
        left: 10px;
        width: 100px;
        background-color: transparent;
        padding-top: 20px;
        z-index: 1000;
        margin-left: 20px;
    }

    /* Sidebar Items */
    .sidebar-item {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
        cursor: pointer;
    }

    /* Rectangle (Box) styling */
    .sidebar-item .rectangle {
        width: 60px;
        height: 50px;
        background-color: #FFFFFF;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        position: relative;
        transition: transform 0.3s ease-in-out, background-color 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Hover effect */
    .sidebar-item:hover .rectangle {
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Active state */
    .sidebar-item.active .rectangle {
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Icon styling */
    .sidebar-item img {
        width: 30px;
        height: 30px;
    }

    /* Description styling */
    .sidebar-item .description {
        display: none;
        font-size: 14px;
        background-color: #FFFFFF;
        padding: 5px;
        border-radius: 5px;
        position: absolute;
        margin-left: 0px;
        white-space: nowrap;
        top: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Show the description on hover */
    .sidebar-item:hover .description {
        display: block;
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Responsive */
    @media screen and (max-width: 768px) {
        .sidebar {
            width: 80px;
        }

        .sidebar-item .rectangle {
            width: 80px;
            height: 60px;
        }

        .sidebar-item img {
            width: 30px;
            height: 30px;
        }

        .sidebar-item .description {
            top: 15px;
            left: 90px;
        }
    }
    .btn-custom {
  border-radius: 15px; /* Membuat tombol menjadi lonjong */
  padding: 10px 20px; /* Mengatur padding agar tombol lebih besar */
  font-size: 16px;/* Menyesuaikan ukuran teks tombol */
   background-color: #7EBEF1; /* Warna latar belakang tombol 'Ubah' */
  color: #fff; /* Warna teks tombol */
}
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('assets/img/CAREMAL (7).png') }}" alt="CaremaL Logo" class="logo">
            {{-- <span class="brand-name">CaremaL</span> --}}
        </div>
        <div class="logo"></div>

        <div class="menu">
            <a href="{{ route('login') }}" class="masuk">MASUK</a>
            <a href="{{route('register')}}" class="daftar-btn">DAFTAR</a>
            <a href="#" class="language-switch">EN</a>
        </div>
        <div class="line-vertical"></div>
    </div>

    
    <!-- Header -->
    <div class="header-container">
        <div class="header">
            <h1 class="main-title">CaremaL</h1>
            <div class="rectangle-a"></div>
            <div class="subtitle">Nam sollicitud nunc, cursus eros vulputate sed. Vestibulum lobortis.</div>
            <div class="cta-button">
                <a href="#kontakDaruratModal" class="cta-btn" data-bs-toggle="modal" data-bs-target="#kontakDaruratModal">KONTAK DARURAT</a>
            </div>
        </div>

        <!-- Mockup -->
        <div class="mockup-container">
            <img src="assets/img/CAREMAL (10).png" class="img-fluid animated" alt="">
        </div>
    </div>

    <!-- Artikel Info -->
    <div class="artikel-info">ARTIKEL</div>
    <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
    
    
        <!-- Search Bar -->
        <div class="search-bar">
            <img src="assets/img/Search.png" alt="Search Icon">
            <input type="text" placeholder="Cari di CaremaL">
        </div>
    

    <!-- Articles Section -->
    <section class="articles">
        <div class="article">
            <img src="{{ asset('assets/img/CAREMAL (12).png') }}" alt="Article 1">
            <h2>Pertolongan Pertama</h2>
            <p>Konten deskripsi singkat</p>
        </div>
        <div class="article">
            <img src="{{ asset('assets/img/CAREMAL (14).png') }}" alt="Article 2">
            <h2>Hewan Ternak</h2>
            <p>Konten deskripsi singkat</p>
        </div>
        <div class="article">
            <img src="{{ asset('assets/img/CAREMAL (17).png') }}" alt="Article 3">
            <h2>Hewan Peliharaan</h2>
            <p>Konten deskripsi singkat</p>
        </div>
    </section>

        <!-- Lebih lanjut -->
        <div class="selanjutnya">
            <a href="{{ route('artikel') }}" class="btn-selanjutnya">Lebih Lanjut</a>
        </div>


<!-- Sidebar -->
<div class="sidebar">
    <!-- Beranda -->
    <div class="sidebar-item" id="beranda">
        <div class="rectangle">
        <a href="#beranda"><img src="assets/img/icon house.png" alt="Beranda Icon"></a>
        </div>
        <div class="description">Beranda: Halaman utama.</div>
    </div>

    <!-- Artikel -->
    <div class="sidebar-item" id="artikel">
        <div class="rectangle">
        <!--<a href="{{ route('artikel') }}">--> <img src="assets/img/icon artikel.png" alt="Artikel Icon"></a>
        </div>
        <!--<div class="description">Artikel: Baca berbagai artikel.</div>-->
    </div>

    <!-- Kontak Darurat -->
    <div class="sidebar-item" id="kontak-darurat">
        <div class="rectangle">
        <a href="#kontak-darurat"><img src="assets/img/icon phone.png" alt="Kontak Darurat Icon"></a>
        </div>
        <!--<div class="description">Kontak Darurat: Hubungi nomor darurat.</div>-->
    </div>

    <!-- Puskeswan -->
    <div class="sidebar-item" id="puskeswan">
        <div class="rectangle">
        <a href="#puskeswan"><img src="assets/img/hospital icon.png" alt="Puskeswan Icon"></a>
        </div>
        <!--<div class="description">Puskeswan: Temukan puskeswan terdekat.</div>-->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="kontakDaruratModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;">
        <div class="modal-content modal-content-scrollable">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead style="background-color: #7EBEF1 !important; color: #fff !important;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Asal Instansi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @if (!isset($data) || $data->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                        @else
                            @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->telepon }}</td>
                            <td>{{ $row->alamat_shelter }}</td>
                            <td>
                                <a href="https://wa.me/{{$row->telepon}}" target="_blank">
                                    <button type="button" class="btn btn-primary">
                                        Hubungi Sekarang
                                    </button>
                                </a>
                            </td>      
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Open Modal
function openModal() {
    document.getElementById("contactModal").style.display = "block";
}

// Close Modal
function closeModal() {
    document.getElementById("contactModal").style.display = "none";
}

// Close modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target == document.getElementById("contactModal")) {
        closeModal();
    }
}

function toggleDescription(id) {
    var item = document.getElementById(id);
    var items = document.getElementsByClassName('sidebar-item');
    
    // Hide descriptions of all items
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove('active');
    }

    // Show the description of the clicked item
    item.classList.toggle('active');
}
</script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
