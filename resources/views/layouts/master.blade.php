<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- favicon --}}
        <link rel="icon" type="image/png" href="assets/img/Logo.png" />

        <title>Bootcamp HIMFO - @yield('title')</title>

        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- Font Awesome --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
            integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
            crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('/css/admin.css') }}" />
        <!-- Our Custom CSS -->
    </head>

    <body>
        <div class="wrapper">
        <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header ps-4">
                    <h3>Admin</h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="@yield('nav-dashboard')">
                        <a href="#" class="item ps-4">
                            <i class="fas fa-th-large me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="@yield('nav-about-us')">
                        <a href="#" class="item ps-4">
                            <i class="fas fa-info-circle me-2"></i>
                            About Us
                        </a>
                    </li>
                    <li class="@yield('nav-event')">
                        <a href="#" class="item ps-4">
                            <i class="fas fa-calendar-week me-2"></i>
                            Event
                        </a>
                    </li>
                    <li class="@yield('nav-blog')">
                        <a href="#" class="item ps-4">
                            <i class="fas fa-newspaper me-2"></i>
                            Blog
                        </a>
                    </li>
                    <li class="@yield('nav-galleries')">
                        <a href="#" class="item ps-4">
                            <i class="fas fa-image me-2"></i>
                            Galleries
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light pe-0">
                    <div class="row w-100 ">
                        <div class="col-6 col-lg-4 ps-4">
                            <button type="button" id="sidebarCollapse" class="btn btn-dark">
                                <i class="fas fa-align-left"></i>
                            </button>
                        </div>
                        <div class="col-6 col-lg-4 d-flex logo-user">
                            <img src="{{ asset('assets/img/Logo.png') }}" class="" height="40px" alt="Logo Binus">
                        </div>
                        <div class="col-lg-4 pe-4 d-none d-md-block">
                            <div style="float: right" class="mt-1">
                                <div class="dropdown">
                                    <img src="{{ asset('assets/img/User.png') }}" class="me-2" height="30px" alt="User">
                                    <span style="font-size:12px">
                                        Deni Kurniawan
                                    </span>
                                    <div href="#" class="dropdown-content">
                                        <a class="btn">
                                            Account
                                        </a>
                                        <a href="/" class="btn">
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>

        {{-- Jquery Slim --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>

        {{-- Boostrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"> </script>

        <script type="text/javascript">
            $("#sidebarCollapse").on("click", function () {
                $("#sidebar, #content").toggleClass("active");
            });
        </script>
    </body>
</html>
