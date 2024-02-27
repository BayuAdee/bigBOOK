<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bigBook</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- costume css -->
  <link rel="stylesheet" href="group7.css">
  <link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script src="jquery.js"></script>
  <script src="js/flipbook.min.js"></script>
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  

  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
  <!-- costume css -->
  <!-- <link rel="stylesheet" href="group7.css">
  <link rel="stylesheet" type="text/css" href="css/flipbook.style.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script src="jquery.js"></script>
  <script src="js/flipbook.min.js"></script> -->
  <!-- Bootstrap Css -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-rbs5mQ8iFm8KjkewtjUpwW1xgfcqfFqgIRz7Udx8M8fxi0pC2iJTJ5z9WrZ3U2S" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-rbs5mQ8iFm8KjkewtjUpwW1xgfcqfFqgIRz7Udx8M8fxi0pC2iJTJ5z9WrZ3U2S" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
  <!-- tambahan
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" id="container-group7">
    <div class="container-fluid">
      <a class="navbar-brand" href="group7.php">
        <img src="aset/logo.png" alt="bigBOOK" width="120">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="news">News</a>
          </li>
          <li><a class="nav-link" href="#" id="form1">FAQ</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ganti Tema
            </a>
            <ul class="dropdown-menu" id="tema">
              <li><a class="dropdown-item" href="#" id="tema1">Light</a></li>
              <li><a class="dropdown-item" href="#" id="tema2">Dark</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="login">login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="btn-group7">
          <!-- <button class="btn btn-custom" type="submit">Search</button> -->
        </form>
      </div>
    </div>
  </nav>

  <!-- diss -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-inner inner-group7">
      <div class="carousel-item active dis-group7">
        <img src="aset/dis1.png" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item dis-group7">
        <img src="aset/dis2.png" class="d-block w-100" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div id="result">

    <div id="judul">
      <h1><b>Daftar Buku</b></h1>
    </div>
    <!-- library -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card" id="0">
            <img src="aset/buku1.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Dilan 1990</h5>
              <p class="card-text truncate-text">Genre: School, Drama, Romance</p>
              <p class="card-text truncate-text">Author: Paidi Baiq -2018</p>
              <div class="button">
                <a id="0" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku2.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Atomic Habits</h5>
              <p class="card-text truncate-text">Genre: Self-imrofment, Psychology, Leadership</p>
              <p class="card-text truncate-text">Author: James Clear -2018</p>
              <div class="button">
                <a id="1" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku6.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Matahari</h5>
              <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
              <p class="card-text truncate-text">Author: Tere Liye -2022</p>
              <div class="button" style="bottom: 20px;">
                <a id="2" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku9.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
              <p class="card-text truncate-text">Genre: Self-imrofment, Psychology</p>
              <p class="card-text truncate-text">Author: Mark Manson -2016</p>
              <div class="button" style="bottom: 20px;">
                <a id="3" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku5.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Bintang</h5>
              <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
              <p class="card-text truncate-text">Author: Tere Liye -2016</p>
              <div class="button">
                <a id="4" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku4.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Bulan</h5>
              <p class="card-text truncate-text">Genre: Fantasi, Petualangan</p>
              <p class="card-text truncate-text">Author: Tere Liye -2015</p>
              <div class="button">
                <a id="5" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku14.png" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Alya hide Feeling In Russian</h5>
              <p class="card-text truncate-text">Genre: Romance, Comedy</p>
              <p class="card-text truncate-text">Author: SunSunSun -2020</p>
              <div class="button">
                <a id="6" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku15.jpeg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Classroom Of The Elite</h5>
              <p class="card-text truncate-text">Genre: School, Psychology</p>
              <p class="card-text truncate-text">Author: Shogo Kinugasa -2020</p>
              <div class="button">
                <a id="7" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku10.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Mindset</h5>
              <p class="card-text truncate-text">Genre: Psychology</p>
              <p class="card-text truncate-text">Author: Carol S. Dweck -2006</p>
              <div class="button">
                <a id="8" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku8.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Selena</h5>
              <p class="card-text truncate-text">Genre: Fantasi</p>
              <p class="card-text truncate-text">Author: Tere Liye -2020</p>
              <div class="button">
                <a id="9" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku11.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text"> The Psychology Of Money</h5>
              <p class="card-text truncate-text">Genre: Psychology</p>
              <p class="card-text truncate-text">Author: Morgan Hausel -2020</p>
              <div class="button">
                <a id="10" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku7.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Hujan</h5>
              <p class="card-text truncate-text">Genre: Romance</p>
              <p class="card-text truncate-text">Author: tere Liye -2016</p>
              <div class="button">
                <a id="11" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku13.webp" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Is Bad Or Good Habits</h5>
              <p class="card-text truncate-text">Genre: Self-imrofment</p>
              <p class="card-text truncate-text">Author: Sabrina Ara -2021</p>
              <div class="button">
                <a id="12" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku3.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Filosofi Teras</h5>
              <p class="card-text truncate-text">Genre: Filsafat</p>
              <p class="card-text truncate-text">Author: Henry Manampiring -2018</p>
              <div class="button">
                <a id="13" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku12.png" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">The Alpha Girl'S Guide</h5>
              <p class="card-text truncate-text">Genre: Self-imrofment</p>
              <p class="card-text truncate-text">Author: Henry Manampiring -2020</p>
              <div class="button">
                <a id="14" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku16.jpg" class="card-img-top" style="max-height: 300px; min-height: 300px;" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title truncate-text">Bumi</h5>
              <p class="card-text truncate-text">Genre: Fantasi</p>
              <p class="card-text truncate-text">Author: Tere Liye -2014</p>
              <div class="button">
                <a id="15" class="btn btn-success mt-2 text-white">Baca E-book <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <svg id="bsvg-group7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ad974f" fill-opacity="1" d="M0,96L34.3,101.3C68.6,107,137,117,206,138.7C274.3,160,343,192,411,202.7C480,213,549,203,617,218.7C685.7,235,754,277,823,250.7C891.4,224,960,128,1029,85.3C1097.1,43,1166,53,1234,58.7C1302.9,64,1371,64,1406,64L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
  </svg>
  <div class="container-fluid" id="footer-group7">
    <footer>
      <p>&copy; 2024 bigBOOK. All rights reserved.</p>
    </footer>
  </div>

</body>

<script src="group7.js"></script>
<script src="popper.min.js"></script>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Aj02eR7YO3+7pJjr9C12ZL5n8w3vSWlRZgqYl5GOgF9l2VY8ZOE4YsYlY3I5OeC" crossorigin="anonymous"></script> -->
</html>