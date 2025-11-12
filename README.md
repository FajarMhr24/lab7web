# penjelasan

## latihan1.php
`<?php`
 
 Tanda pembuka kode PHP. Semua perintah PHP ditulis di antara <?php dan ?>.

`$nim = "312410549";`

Membuat variabel bernama $nim dan menyimpannya dengan nilai "312410549".
Dalam PHP, setiap variabel diawali dengan tanda $.

`$nama = "Fajar Maher";`

Membuat variabel lain bernama $nama dengan isi "Fajar Maher".

`echo "NIM : " . $nim . "<br>";`

Menampilkan teks ke layar.

echo digunakan untuk menampilkan output.

`"NIM : "` 

adalah teks statis.

Tanda titik (.) digunakan untuk menggabungkan (concatenate) teks dengan variabel.

`"<br>"` memberi baris baru (line break) di HTML agar hasilnya tidak sejajar.

`Jadi hasil baris ini:
 NIM : 312410549`

`echo "Nama : " . $nama;`

Menampilkan teks "Nama : " lalu isi variabel $nama.
Hasilnya:
 `Nama : Fajar Maher`

`?>`

Penutup kode PHP (opsional jika file hanya berisi PHP saja).

## latihan2

`<form method="post">`

Membuat form yang mengirim data ke halaman yang sama menggunakan metode POST.

`<input type="text" name="nama" value="Fajar Maher">`

Kolom teks untuk mengisi nama.

Nilai awalnya “Fajar Maher”.

`<input type="submit" value="Kirim">`

Tombol untuk mengirim form.

`if (empty($_POST['nama'])) { $_POST['nama'] = 'fajar'; }`

Mengecek apakah kolom `“nama”` kosong.

Jika kosong, maka otomatis diisi dengan “fajar” sebagai default.

`echo 'Selamat Datang ' . $_POST['nama'];`

Menampilkan teks sapaan ke browser

## operator

`$gaji = 1000000;`

Menyimpan gaji kotor sebesar Rp 1.000.000.

`$pajak = 0.1;`

Menyimpan nilai pajak sebesar 10% (0.1).

`$thp = $gaji - ($gaji * $pajak);`

Menghitung gaji bersih dengan rumus:

gaji - (gaji × pajak)

Jadi: `1.000.000 - (1.000.000 × 0.1) = 900.000.`

`echo "Gaji sebelum pajak = Rp. $gaji <br>";`

Menampilkan teks:

Gaji sebelum pajak = `Rp. 1000000`

`echo "Gaji yang dibawa pulang = Rp. $thp";`

Menampilkan teks:

Gaji yang dibawa pulang = `Rp. 900000`

## kondisi_if

`$nama_hari = date("l");`


Fungsi `date("l")` (huruf L kecil) mengambil nama hari dalam Bahasa Inggris,
misalnya:

Sunday

Monday

Tuesday

Wednesday

Thursday

Friday

Saturday

Nilainya disimpan ke variabel `$nama_hari`.

Struktur `if...elseif...else`

Mengecek isi dari $nama_hari, lalu mencetak padanan nama hari versi Indonesia:

Sunday → Minggu

Monday → Senin

Tuesday → Selasa

Wednesday → Rabu

Thursday → Kamis

Friday → Jumat

Saturday → Sabtu

`echo "Minggu";` (dan seterusnya)

Menampilkan hasil nama hari sesuai kondisi yang cocok.

## perulangan

### 1. for naik 
```php
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}
```
Mulai dari $i = 1

Berhenti saat $i <= 10

Setiap langkah $i bertambah 1 ($i++)

Hasilnya:

```python
Perulangan ke: 1
...
Perulangan ke: 10
```

### 2. for turun

```php
for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}
```

Mulai dari $i = 10

Berhenti saat $i >= 1

Setiap langkah $i berkurang 1 ($i--)

Hasil:

```python
Perulangan ke: 10
...
Perulangan ke: 1
```

### 3. while 

```php
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
```

Mengecek kondisi sebelum menjalankan isi loop.

Selama `$i <= 10`, perulangan terus berjalan.


### 4. do...while

```php
$i = 1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i <= 10);
```

Menjalankan isi loop setidaknya sekali,

baru setelah itu mengecek kondisi `$i <= 10.`

## tugas

### bagian from html

```html
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
```
Form ini mengirim data ke halaman yang sama menggunakan metode POST.
Pengguna wajib mengisi semua kolom (`required`).

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
```

Menyimpan input dari pengguna ke dalam variabel PHP.

```php
$lahir = new DateTime($tanggal_lahir);
$hari_ini = new DateTime();
$umur = $hari_ini->diff($lahir)->y;
```

Menggunakan objek DateTime untuk menghitung selisih tahun (`->y`).

```php
switch ($pekerjaan) {
    case "Guru": $gaji = 5000000; break;
    case "Programmer": $gaji = 8000000; break;
    case "Desainer": $gaji = 6000000; break;
    case "Dokter": $gaji = 10000000; break;
    default: $gaji = 0;
}
```
Struktur switch-case dipakai untuk menentukan nilai gaji sesuai pekerjaan.

```
echo "<h3>Hasil Data Diri</h3>";
echo "Nama: $nama <br>";
echo "Tanggal Lahir: $tanggal_lahir <br>";
echo "Umur: $umur tahun <br>";
echo "Pekerjaan: $pekerjaan <br>";
echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
```
Menampilkan data yang sudah diolah, dengan format gaji misalnya:
`Rp 8.000.000`



