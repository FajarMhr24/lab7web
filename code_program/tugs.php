<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Akhir - PHP Dasar</title>
</head>
<body>
<h2>Form Data Diri</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama" required><br><br>
    <label>Tanggal Lahir: </label>
    <input type="date" name="tanggal_lahir" required><br><br>
    <label>Pekerjaan: </label>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Guru">Guru</option>
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Dokter">Dokter</option>
    </select><br><br>
    <input type="submit" value="Kirim">
</form>
<hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];
    $lahir = new DateTime($tanggal_lahir);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($lahir)->y;
    switch ($pekerjaan) {
        case "Guru": $gaji = 5000000; break;
        case "Programmer": $gaji = 8000000; break;
        case "Desainer": $gaji = 6000000; break;
        case "Dokter": $gaji = 10000000; break;
        default: $gaji = 0;
    }
    echo "<h3>Hasil Data Diri</h3>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
}
?>
</body>
</html>
