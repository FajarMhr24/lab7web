<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama" value="Fajar Maher">
    <input type="submit" value="Kirim">
</form>
<?php
if (empty($_POST['nama'])) {
    $_POST['nama'] = 'fajar';
}
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
