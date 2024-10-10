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

        /* Container untuk form */
        .login-container2 {
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
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


<div class="login-container">
<h2> Selamat Meylisa Kamu Berhasil Login</h2>

<div class="login-container2">
<?php
// Daftar hari libur nasional
$publicHolidays = [
    '2024-01-01', // Tahun Baru
    '2024-12-25', // Natal
    // Tambahkan tanggal libur lainnya
];

// Fungsi untuk memeriksa apakah tanggal adalah hari kerja
function isWorkday($date) {
    global $publicHolidays;
    $date = new DateTime($date);
    $dayOfWeek = $date->format('w');
    $formattedDate = $date->format('Y-m-d');

    // Memeriksa apakah tanggal adalah akhir pekan atau hari libur
    if ($dayOfWeek >= 1 && $dayOfWeek <= 5 && !in_array($formattedDate, $publicHolidays)) {
        return true;
    }
    return false;
}

// Fungsi untuk mencetak hari kerja dalam rentang tanggal
function printWorkdays($startDate, $endDate) {
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = new DateInterval('P1D'); // Interval 1 hari
    $dateRange = new DatePeriod($start, $interval, $end->modify('+1 day')); // Menambahkan satu hari agar endDate termasuk
    
    foreach ($dateRange as $date) {
        if (isWorkday($date->format('Y-m-d'))) {
            echo $date->format('Y-m-d') . " adalah hari kerja.<br>";
        } else {
            echo $date->format('Y-m-d') . " adalah akhir pekan atau hari libur.<br>";
        }
    }
}

// Rentang tanggal yang ingin diperiksa
$startDate = '2024-08-10'; // Format YYYY-MM-DD
$endDate = '2024-08-20';   // Format YYYY-MM-DD

printWorkdays($startDate, $endDate);
?>

<p>
<a href="02 index menentukan hari libur .php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
