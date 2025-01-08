<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - CaremaL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4ff;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container img {
            width: 80px;
        }

        .login-container h2 {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
        }

        .forgot-password {
            text-align: right;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }

        .terms {
            font-size: 12px;
            color: #888;
        }

        .terms a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <img src="images/logoo.png" alt="CaremaL Logo" style="width: 200px;">
        <h2>Selamat datang di CaremaL!</h2>
        <p>You can connect directly, quickly, and easily.</p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-mail" required
                    autofocus>
            </div>
            @error('Nomor telepon')
                <small<{{ $message }}></small>
                @enderror
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                </div>
                @error('Password')
                    <small<{{ $message }}></small>
                    @enderror
                    <div class="forgot-password">
                        <a href="#">Lupa Kata Sandi?</a>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
        </form>

        <p class="terms">By creating an account, you accept our <a href="#">Terms and Conditions</a> and <a
                href="#">Privacy Policy</a>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
