@extends('admin/daftardoktor')
@section('daftardoktor')
    <style>
        body {
            font-family: Poppins, Poppins;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7f6;
            margin: 0;
        }
        
        .container {
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
        }

        h2 {
            text-align: center;
            font-size: 1.5rem;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: #7EBEF1;
            cursor: pointer;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #7EBEF1;
            border-radius: 25px;
            font-size: 15px;
            outline: none;
            font-family: 'Poppins';
            left: 23.59%;


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

        .terms {
            font-size: 0.7rem;
            text-align: center;
            color: #888;
            margin-top: 10px;
        }

        .terms a {
            color: #7EBEF1;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="close-btn">&times;</span>
        <h2>DAFTARKAN DOKTER</h2>
        <form action="{{ route('insert') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nama Lengkap" required>
            <input type="text" placeholder="Nomor Telepon" required>
            <input type="text" placeholder="Instansi" required>
            <input type="text" placeholder="Jabatan" required>
            <button type="submit" class="submit-btn">Lanjut</button>
        </form>
        <p class="terms">By creating emergency number, you accept our <a href="#">Terms and conditions</a> you read our <a href="#">Privacy Policy</a>.</p>
    </div>

    <script>
        const closeBtn = document.querySelector('.close-btn');
        closeBtn.addEventListener('click', () => {
            alert("Form Closed");
            document.querySelector('.container').style.display = 'none';
        });
    </script>
</body>
</html>
