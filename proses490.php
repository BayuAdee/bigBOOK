<span id="msg"></span>
<?php
// Proses form
$nama = $_GET['nama'];
$judul_buku490 = $_GET['judul'];
$tanggal = $_GET['tanggal'];
$tanggal_kembali_490 = $_GET['kembali'];

// echo "<h3>Data berhasil dibuat berdasarkan data yang diinput:</h3>";
echo "<div class='table-responsive'><table class='table table-hover table-bordered' style='border:1px dash'>";
echo "<tr ><th class='bg-light'>Nama</th><th  class='bg-light'>Judul Buku</th><th  class='bg-light'>Tanggal Peminjaman</th><th  class='bg-light'>Tanggal Kembali</th><th  class='bg-light'>Aksi</th></tr>";
echo "<tr><td>$nama</td><td>$judul_buku490</td><td>$tanggal</td><td>$tanggal_kembali_490</td><td><a href='#' class='btn btn-info'>edit</a>&nbsp;<a href='#' class='btn btn-danger'>delete</a></td></tr>";
echo "</table></div>";
?>