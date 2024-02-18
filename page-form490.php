<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="page-form490.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <!-- <div class="pendaftaran_490"> -->
    <div class="card " style="margin:20px;">
        <h5 class="card-header ">Form Peminjaman</h5>

        <!-- <form action="" method="get"> -->
        <div class="form-group" style="margin:10px">
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama_490" placeholder="Masukkan nama" id="nama490" class="form-control">
        </div>
        <span id="errornama"></span>
        <div class="form-group" style="margin:10px">
            <label for="judul">Judul buku yang dipinjam :</label><br>

            <input type="text" name="judul_buku490" placeholder="Masukkan judul buku" id="judul490" class="form-control">
        </div>
        <span id="errorjudul"></span>
        <div class="form-group" style="margin:10px">
            <label for="pinjam">Tanggal peminjaman :</label><br>
            <input type="date" name="tanggal_490" id="pinjam490" class="form-control">
        </div>
        <span id="errorpinjam"></span>
        <div class="form-group" style="margin:10px">
            <label for="kembali">Tanggal kembali :</label><br>
            <input type="date" name="tanggal_kembali_490" id="kembali490" class="form-control">
        </div>
        <span id="errorkembali"></span>

        <p>Apakah Kamu ingin memperpanjang peminjaman?</p>
        <input type="radio" name="radioGroup" value="Bisa isi ubah dulu" id="radio1490" />
        <label for="radioOption1">iya nih, kurang</label>
        <input type="radio" name="radioGroup" value="Bagus kamu ga plin-plan" id="radio2490" />
        <label for="radioOption2">ndak dulu maaf</label>
        <p id="outputRadio">Tolong di pilih yaa</p>
        <button class="btn btn-light" id="kirim490">Kirim</button>


        <!-- </form> -->
        <div id="okta"></div>
    </div>
    <!-- </div> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ad974f" fill-opacity="1" d="M0,64L17.1,96C34.3,128,69,192,103,213.3C137.1,235,171,213,206,202.7C240,192,274,192,309,208C342.9,224,377,256,411,261.3C445.7,267,480,245,514,218.7C548.6,192,583,160,617,170.7C651.4,181,686,235,720,224C754.3,213,789,139,823,122.7C857.1,107,891,149,926,165.3C960,181,994,171,1029,149.3C1062.9,128,1097,96,1131,80C1165.7,64,1200,64,1234,96C1268.6,128,1303,192,1337,186.7C1371.4,181,1406,107,1423,69.3L1440,32L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path>
    </svg>
    <div class="container-fluid" id="footer-group7">
        <footer>
            <p>&copy; 2024 bigBOOK. All rights reserved.</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="jquery.js"></script>
    <script src="page-form490.js"></script>
</body>

</html>