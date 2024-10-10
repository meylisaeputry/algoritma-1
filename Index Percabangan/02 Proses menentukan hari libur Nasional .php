<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <style>
    /* Styling umum untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0; /* Warna latar belakang pink muda */
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
            text-align: center;
            margin-bottom: 30px;
            color: #ff3399; /* Warna teks judul pink lebih tua */
        }

       
        
        /* Style untuk input */
        input[type="text"], input[type="Masukkan Nilai P"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
        }

/* Style untuk input */
input[type="text"], input[type="Masukkan Nilai L"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
        }

        /* Style untuk input */
input[type="text"], input[type="Masukkan Nilai T"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff99cc; /* Border pink muda */
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fff0f5; /* Warna latar belakang input pink muda */
        }

        /* Style untuk tombol */
        input[type="submit"] {
            width: 100%;
            background-color: #ff66b2; /* Warna pink cerah */
            color: white;
            padding: 14px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect untuk tombol */
        input[type="submit"]:hover {
            background-color: #ff3399; /* Warna pink lebih tua */
        }

        /* Styling untuk label */
        label {
            font-size: 14px;
            color: #cc0066; /* Warna label pink tua */
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 600px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }
        }

        /* Kalimat Selamat Datang Di Paling atas*/
        .welcome-message2 {
            font-size: 20px;
            color: #ff1493; /* Pink yang cerah */
            font-weight: bold;
            margin-bottom: 20px;
        }

 /* Kalimat Selamat Datang Di Paling atas*/
 .welcome-message1 {
            font-size: 20px;
            color: #ff1493; /* Pink yang cerah */
            margin-bottom: 20px;
        }
</style>

</head>
<body>
<div class="login-container">
        <center>
    <div class="welcome-message2">Selamat Datang Meylisa</div>
    <div class="welcome-message1"><h4>Di Program Project Percabangan Notasi Algoritma Mentukan Hari Libur<h4></div>
    </center>

 <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 


<form method="GET" action="02 output menentukan hari libur nasional.php">

  <label for="Input Hari Libur Kerja">Input Hari Libur Kerja:</label>
  <input type="text" id="Input Hari Libur Kerja" name="Input Hari Libur Kerja" required><br><br>
  
  
  <input type="submit" value="Hasil Input">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$InputHariKerja = [
    'Input Hari Libur Kerja' => 'Hari libur kerja 2024',     

];
}