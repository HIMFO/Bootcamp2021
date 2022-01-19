<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- favicon --}}
    <link rel="icon" type="image/png" href="assets/img/Logo.png" />
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
                        <a class="nav-link" href="#">Home <?php echo 1 + 1; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                @if (auth()->guard('web')->check())
                    <div class="user_action d-flex align-items-center">
                        <img src="{{ asset('assets/img/User.png') }}" alt="User Avatar" class="mx-2">
                        <p class="mx-2 my-0">{{ auth()->guard('web')->user()->name }}</p>
                        <div class="dropdown">
                            <i class="fas fa-chevron-down mx-2 text-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                            </div>
                        </div>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
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
        <div class="container p-4 d-flex justify-content-between align-items-center">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Event Details</li>
                    </ol>
                </nav>
                <h1 class="fw-bold">{{ $event->nama }}</h1>
            </div>
        </div>
        <div class="container">
            <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->nama }}">
        </div>
        <div class="container pl-4 mt-4">
            {!! $event->deskripsi !!}
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
