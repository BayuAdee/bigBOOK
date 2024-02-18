<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Tambahkan link CSS dan tag <style> untuk styling -->
  <link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="group7.css">
  <link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <style>
    /* Tambahkan styling tambahan jika diperlukan */
    
    .book-group7 {
      /* Styling container buku */
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <!-- Pertahankan struktur HTML Anda dengan menambahkan kelas untuk flipbook -->
    <div class="col-md-3 col-sm-4 col-6 book-group7">
      <div class="card">
        <img src="aset/buku1.jpg" class="card-img-top" alt="Book Cover">
        <div class="card-body">
          <h5 class="card-title truncate-text">Bintang</h5>
          <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
          <p class="card-text truncate-text">Author: Tere Liye -2016</p>
          <div class="button">
            <!-- Gunakan kelas untuk memanggil flipBook -->
            <a class="btn btn-success mt-2 text-white book-link" data-pdf="pdf/Bintang.pdf" data-id="1">
              Baca PDF <i class="fas fa-book-reader fa-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-4 col-6 book-group7">
      <div class="card">
        <img src="aset/buku2.jpg" class="card-img-top" alt="Book Cover">
        <div class="card-body">
          <h5 class="card-title truncate-text">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
          <p class="card-text truncate-text">Genre: Self-imrofment, Psychology</p>
          <p class="card-text truncate-text">Author: Mark Manson -2016</p>
          <div class="button">
            <!-- Gunakan kelas untuk memanggil flipBook -->
            <a class="btn btn-success mt-2 text-white book-link" data-pdf="pdf/bodoamat.pdf" data-id="2">
              Baca PDF <i class="fas fa-book-reader fa-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Tambahkan elemen buku lainnya sesuai kebutuhan -->
  </div>
</div>

<!-- Tambahkan skrip jQuery dan flipBook setelah struktur HTML -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="js/flipbook.min.js"></script>
<script>
  // Fungsi untuk memanggil flipBook
  function showFlipbook(pdfUrl) {
    $(pdfUrl).flipBook({
      // Konfigurasi flipBook
    });
  }

  // Event saat tombol "Baca PDF" ditekan
  $('.book-link').on('click', function() {
    // Ambil data-pdf dari tombol dan panggil flipBook
    var pdfUrl = $(this).data('pdf');
    showFlipbook(pdfUrl);
  });
</script>

</body>
</html>