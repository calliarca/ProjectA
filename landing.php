<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .login {
            background-color: #3498db;
        }

        .register {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="container">
        <div>
            <h1>Selamat datang di Situs ProjectA</h1>
            <p>Silakan pilih opsi untuk login atau mendaftar</p>
            <a href="login.php" class="btn login">Login</a>
            <a href="registration.php" class="btn register">Daftar</a>
        </div>
    </div>

</body>
</html>
