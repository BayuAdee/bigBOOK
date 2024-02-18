<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bigBOOK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
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

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ecf0f1;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ecf0f1;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ecf0f1;
        }

        .btn-custom {
            color: #8e793e;
            background-color: #eaeaea;
            border-color: #ad974f;
        }

        .btn-custom:hover {
            color: #ffffff;
            background-color: #ad974f;
            border-color: #ad974f;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="container-group7">
        <div class="container-fluid">
            <a class="navbar-brand" href="group7.php">
                <img src="aset/logo.png" alt="bigBOOK" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ganti Tema
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="tema">
                            <li><a class="dropdown-item" href="#" id="tema1">Light</a></li>
                            <li><a class="dropdown-item" href="#" id="tema2">Dark</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="login">login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        id="btn-group7">
                    <button class="btn btn-custom" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku1.jpg" class="card-img-top" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title">Dilan 1990</h5>
              <p class="card-text">Genre: School, Drama, Romance</p>
              <p class="card-text">Author: Paidi Baiq -2018</p>
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
              <h5 class="card-title">Atomic Habits</h5>
              <p class="card-text">Genre: Self-imrofment, Psychology, Leadership</p>
              <p class="card-text">Author: James Clear -2018</p>
              <div class="button">
                <a id="1" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku6.jpg" class="card-img-top" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title">Matahari</h5>
              <p class="card-text">Genre: Fantasi, Petualangan</p>
              <p class="card-text">Author: Tere Liye -2022</p>
              <div class="button">
                <a id="2" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku9.jpg" class="card-img-top" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
              <p class="card-text">Genre: Self-imrofment, Psychology</p>
              <p class="card-text">Author: Mark Manson -2016</p>
              <div class="button">
                <a id="3" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 book-group7">
          <div class="card">
            <img src="aset/buku5.jpg" class="card-img-top" alt="Book Cover">
            <div class="card-body">
              <h5 class="card-title">Bintang</h5>
              <p class="card-text">Genre: Fantasi, Petualangan</p>
              <p class="card-text">Author: Tere Liye -2016</p>
              <div class="button">
                <a id="4" class="btn btn-success mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Toggle Dark Mode
            $("#tema1").click(function () {
                $("body").removeClass("dark-mode");
            });

            $("#tema2").click(function () {
                $("body").addClass("dark-mode");
            });
        });
    </script>

</body>

</html>