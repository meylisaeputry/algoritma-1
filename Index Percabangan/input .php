<!DOCTYPE html>

<html>

<head>

    <title>HARI KERJA</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <p>Anda Login Sebagai : <?php if ($_GET) {
                                echo $_GET['nama'];
                                echo '  Dengan Email: ' . $_GET['email'];
                                $_GET['status'] = 'aktif';
                            }

                            ?></p>

    <form action="output .php" method="post">
        <html>

        <head>
            <title>Menentukan Hari Libur Kerja</title>
        </head>

        <body>
            <h2>Masukkan Nilai Inputan</h2>
            <form action="output .php" method="post">
            <label for="Input Hari Libur Kerja">Input Hari Libur Kerja:</label>
  <input type="text" id="Input Hari Libur Kerja" name="Input Hari Libur Kerja" required><br><br>

  <form method="post">
    <label for="startDate">Tanggal Awal:</label>
    <input type="date" name="startDate" required><br><br>
    <label for="endDate">Tanggal Akhir:</label>
    <input type="date" name="endDate" required><br><br>


                <input type="submit" value="Input">
            </form>
        </body>

        </html>