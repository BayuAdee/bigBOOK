<?php
// Proses form
$nama = $_GET['nama'];
$tanggal_kunjungan = date('Y-m-d');

echo "<h3>Data berhasil dibuat berdasarkan data yang diinput:</h3>";
echo "<table>";
echo "<tr><th>Nama</th><th>Tanggal Kunjungan</th></tr>";
echo "<tr><td>$nama</td><td>$tanggal_kunjungan</td></tr>";
echo "</table>";
?>