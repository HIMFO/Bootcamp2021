<?php

$login = false;
$user = 'Dary Ramadhan';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootcamp HIMFO</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
        integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
        crossorigin="anonymous"></script>
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg p-3 navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/Logo.png') }}" alt="HIMTI Binus @Malang">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                @if ($login == true)
                    <div class="user_action d-flex align-items-center">
                        <img src="{{ asset('assets/img/User.png') }}" alt="User Avatar" class="mx-2">
                        <p class="mx-2 my-0">{{ $user }}</p>
                        <div class="dropdown">
                            <i class="fas fa-chevron-down mx-2 text-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="user_action d-flex">
                        <a href="/register" style="text-decoration: none" class="h-100 mx-lg-3 p-lg-2 py-2 text-center">Register</a>
                        <a href="/login" class="btn btn-outline-primary h-100 py-2 px-3">Login</a>
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <main>
        <div class="landing d-flex flex-column align-items-center justify-content-center">
            <div class="landing_box d-flex flex-column align-items-center">
                <h1 class="text-center my-4">
                    <span class="text-secondary">(HIMFO)</span><br>
                    Himpunan Mahasiswa<br>
                    <span class="bg-secondary">Teknik Informatika</span>
                </h1>
                <p>Binus University @Malang</p>
            </div>
            <div class="landing_arrow d-flex flex-column align-items-center">
                <p>scroll down</p>
                <img src="{{ asset('assets/svg/Arrow.svg') }}" alt="Arrow">
            </div>
        </div>
        <div class="tagline">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
                <p>Our Tagline</p>
                <h1>One Family One Goal</h1>
            </div>
        </div>
        <div class="history container">
            <p class="mb-0">1 // Our History</p>
            <h2 class="mb-4">History of HIMFO</h2>
            <p class="text-justify">Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara atau yang sering
                kita sebut HIMFO berdiri pertama kali pada tahun 1992, tepatnya pada 14 September 1992. Pencetus ide
                HIMTI merupakan mantan ketua Jurusan Teknik Informatika yaitu Bpk. Ir. Toto Widyanto, MSc. Pada saat
                itu, HIMTI dipimpin oleh koordinator umum bernama Sdr. Yusuf Setiyono HIMTI sendiri merupakan organisasi
                kemahasiswaan yang memiliki bentuk sebagai himpunan antar jurusan School of Computer Science (SOCS).</p>
        </div>
        <div class="quote container d-flex">
            <div class="mx-5 d-flex flex-column justify-content-between">
                <h2>HIMFO bagi saya adalah rumah tempat kita bertukar pikiran, bersatu dan bersinergi bersama.</h2>
                <div class="align-self-end">
                    <h3>Stephano Christian</h3>
                    <p>Chief Executive Officer</p>
                </div>
            </div>
            <img src="{{ asset('assets/img/Figure.png') }}" alt="Stephano Christian">
        </div>
        <div class="event container p-5">
            <p class="mb-0">2 // Our Activities</p>
            <h1 class="mb-5">Upcoming Event</h1>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/Card.png') }}" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <h5 class="card-title">Bootcamp HIMFO 2021</h5>
                            <p class="card-text">25 Oktober 2021</p>
                            <a href="#" class="card-link">Lihat detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/Card.png') }}" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <h5 class="card-title">Bootcamp HIMFO 2021</h5>
                            <p class="card-text">25 Oktober 2021</p>
                            <a href="#" class="card-link">Lihat detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/Card.png') }}" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <h5 class="card-title">Bootcamp HIMFO 2021</h5>
                            <p class="card-text">25 Oktober 2021</p>
                            <a href="#" class="card-link">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="galleries container p-5">
            <p class="mb-0">3 // Our Galleries</p>
            <h1 class="mb-5">Galleries of HIMTI</h1>
            <div class="row">
                <div class="gallery_image col-6 my-3">
                    <img src="{{ asset('assets/img/Gallery-1.png') }}" alt="Gallery Image">
                </div>
                <div class="gallery_image col-6 my-3">
                    <img src="{{ asset('assets/img/Gallery-2.png') }}" alt="Gallery Image">
                </div>
                <div class="gallery_image col-6 my-3">
                    <img src="{{ asset('assets/img/Gallery-3.png') }}" alt="Gallery Image">
                </div>
                <div class="gallery_image col-6 my-3">
                    <img src="{{ asset('assets/img/Gallery-4.png') }}" alt="Gallery Image">
                </div>
            </div>
        </div>
        <div class="contact p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Let us know if you have a questions.</h1>
                        <p>Your question will be answered max 1x24 hours, thanks for contact us!</p>
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">
                        <a href="#" class="btn btn-dark p-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container p-5">
        <div class="row my-3">
            <div class="col">
                <img src="{{ asset('assets/img/Logo.png') }}" alt="HIMTI Binus @Malang">
            </div>
            <div class="col">
                <ul>
                    <li class="my-3 font-weight-bold">
                        Navigation
                    </li>
                    <li class="my-3">
                        <a href="#">Home</a>
                    </li>
                    <li class="my-3">
                        <a href="#">About</a>
                    </li>
                    <li class="my-3">
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="my-3 font-weight-bold">
                        Account
                    </li>
                    <li class="my-3">
                        <a href="#">Register</a>
                    </li>
                    <li class="my-3">
                        <a href="#">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="my-3 font-weight-bold">
                        Follow
                    </li>
                    <li class="my-3 d-flex">
                        <div class="media_logo btn btn-dark p-2 mr-2 d-flex justify-content-center align-items-center">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="media_logo btn btn-dark p-2 mr-2 d-flex justify-content-center align-items-center">
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <div class="media_logo btn btn-dark p-2 mr-2 d-flex justify-content-center align-items-center">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </li>
                    <li class="my-3">
                        <a href="mailto:himtimalang@binus.ac.id">himtimalang@binus.ac.id</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="mt-5 mb-3 text-center">Copyright by Himpunan Mahasiswa Teknik Informatika Binus University | 2021</p>
    </footer>
    {{-- Jquery Slim, Popper, Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>
