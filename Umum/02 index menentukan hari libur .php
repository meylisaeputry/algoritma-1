<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna - Tema Pink</title>
    <style>
        /* Styling untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffe4e1; /* Latar belakang pink lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container untuk form */
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            border: 2px solid #ff99cc; /* Border pink */
        }

        /* Judul form */
        h2 {
            margin-bottom: 30px;
            color: #d147a3; /* Pink yang lebih terang untuk judul */
        }

        /* Style untuk input field */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #d147a3; /* Border pink */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }

        /* Style untuk input field */
        input[type="text"], input[type="Input Email"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #d147a3; /* Border pink */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }


        /* Style untuk tombol */
        input[type="submit"] {
            width: 100%;
            background-color: #ff69b4; /* Pink cerah untuk tombol */
            color: white;
            padding: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect pada tombol */
        input[type="submit"]:hover {
            background-color: #ff1493; /* Pink yang lebih tua saat dihover */
        }

        /* Style untuk label */
        label {
            font-size: 14px;
            color: #d147a3; /* Pink untuk label */
        }

        /* Media query untuk layar kecil */
        @media (max-width: 600px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>


<body>
<div class="login-container">
    <h2>Identifikasi Pengguna(Login)</h2>
    <form method="POST" action="02 Proses menentukan hari libur nasional .php">
        <label for="Input Nama">Input Nama:</label>
        <input type="text" id="Input Nama" name="Input Nama" required>

        <label for="Input Email">Input Email:</label>
        <input type="Input Email" id="Input Email" name="Input Email" required>

        <input type="submit" value="Login">
    </form>
</div>


</head>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$username = [
    'user1' => 'Meylisa',     // Username: user1, Password: userpass
    'user2' => 'putrymeylisa315@gmail.com',     // Username: user1, Password: userpass

];
}

    // Validasi apakah username dan password sesuai
    if (isset($users[$username]) && $users[$username] === $password) {
        // Login berhasil
        echo "Login berhasil! Selamat datang, " . $username . ".";
    } 


if (isset($users[$username]) && $users[$username] === $password) {
    // Login berhasil, arahkan ke halaman beranda
    header("02 Proses menentukan hari libur nasional .php");
    exit();
}

?>
