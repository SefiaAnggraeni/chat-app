<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - CaremaL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4ff;
        }

        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-container img {
            width: 80px;
        }

        .register-container h2 {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary,
        .btn-secondary {
            border-radius: 30px;
            width: 100%;
            padding: 10px;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .terms {
            font-size: 12px;
            color: #888;
        }

        .terms a {
            text-decoration: none;
            color: #007bff;
        }

        /* Hidden by default */
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <img src="{{ asset('images/logoo.png') }}" alt="CaremaL Logo" style="width: 200px;">
        <h2>Mulai saja di CaremaL!</h2>
        <p>Connect directly, quickly, and easily.</p>

        <form method="POST" action="{{ route('register') }}" id="registration-form">
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <!-- Input untuk Masyarakat -->
            <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group hidden" id="nip-field">
                <input type="text" name="nik" class="form-control" placeholder="Nomor Induk Pegawai">
            </div>
            <div class="form-group">
                <select name="jk" class="form-control" required>
                    <option value="" disabled selected>Jenis kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            
            <div class="form-group hidden" id="alamat-field">
                <input type="text" name="telepon" class="form-control" placeholder="telepon">
            </div>
            <div class="form-group hidden" id="alamat-field">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>

            <!-- Pilihan Role -->
            <div class="form-group">
                <select name="role" class="form-control" id="role-select" required>
                    <option value="masyarakat">Masyarakat</option>
                    <option value="dokter">Dokter</option>
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>

        <p class="terms">Dengan membuat akun, Anda menerima <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>.</p>
    </div>

    <script>
        const roleSelect = document.getElementById('role-select');
        const nipField = document.getElementById('nip-field');
        const alamatField = document.getElementById('alamat-field');

        roleSelect.addEventListener('change', function () {
            if (roleSelect.value === 'dokter') {
                nipField.classList.remove('hidden');
                alamatField.classList.remove('hidden');
            } else {
                nipField.classList.add('hidden');
                alamatField.classList.add('hidden');
            }
        });
    </script>
</body>

</html>