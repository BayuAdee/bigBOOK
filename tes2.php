<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
  <style>
    .book-group7 {
      height: 100%;
    }

    .book-group7 .card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .book-group7 .card-body {
      flex-grow: 1;
    }

    .book-group7 .card img {
      width: 100%;
      height: auto;
    }

    .truncate-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-6 book-group7">
        <div class="card">
          <img src="aset/buku1.jpg" class="card-img-top" alt="Book Cover">
          <div class="card-body">
            <h5 class="card-title truncate-text">Bintang</h5>
            <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
            <p class="card-text truncate-text">Author: Tere Liye -2016</p>
            <div class="button">
              <a id="0" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
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
              <a id="0" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
 
      <div class="col-md-3 col-sm-4 col-6 book-group7">
        <div class="card">
          <img src="aset/buku6.jpg" class="card-img-top" alt="Book Cover">
          <div class="card-body">
            <h5 class="card-title truncate-text">Matahari</h5>
            <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
            <p class="card-text truncate-text">Author: Tere Liye -2022</p>
            <div class="button">
              <a id="0" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3 col-sm-4 col-6 book-group7">
        <div class="card">
          <img src="aset/buku9.jpg" class="card-img-top" alt="Book Cover">
          <div class="card-body">
            <h5 class="card-title truncate-text">Dilan 1990</h5>
            <p class="card-text truncate-text">Genre: School, Drama, Romance</p>
            <p class="card-text truncate-text">Author: Paidi Baiq -2018</p>
            <div class="button">
              <a id="0" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-sm-4 col-6 book-group7">
        <div class="card">
          <img src="aset/buku5.jpg" class="card-img-top" alt="Book Cover">
          <div class="card-body">
            <h5 class="card-title truncate-text">Atomic Habits</h5>
            <p class="card-text truncate-text">Genre: Self-imrofment, Psychology, Leadership</p>
            <p class="card-text truncate-text">Author: James Clear -2018</p>
            <div class="button">
              <a id="0" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- ... (card lainnya) ... -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
