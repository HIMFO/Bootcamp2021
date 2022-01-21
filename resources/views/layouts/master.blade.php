<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link rel="icon" type="image/png" href="assets/img/Logo.png" />
    <title>Bootcamp HIMFO - Register Page</title>

    {{-- Boostrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

    {{-- QuillJS CSS --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="wrapper">
        <div id="sidebar">
            <div class="sidebar-header ps-4 py-4">
                <h3>Admin</h3>
            </div>
            <ul class="text-white list-unstyled components">
                <li class="@yield('nav-dashboard')">
                    <a href="/dashboard" class="ps-4">
                        <i class="fas fa-th-large me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="@yield('nav-aboutus')">
                    <a href="/aboutus" class="ps-4">
                        <i class="fas fa-info-circle me-2"></i>
                        About Us
                    </a>
                </li>
                <li class="@yield('nav-event')">
                    <a href="{{ route('admin.event') }}" class="ps-4">
                        <i class="fas fa-calendar-week me-2"></i>
                        Event
                    </a>
                </li>
                <li class="@yield('nav-blog')">
                    <a href="/blog" class="ps-4">
                        <i class="fas fa-newspaper me-2"></i>
                        Blog
                    </a>
                </li>
                <li class="@yield('nav-galleries')">
                    <a href="{{ route('admin.galleries') }}" class="ps-4">
                        <i class="fas fa-image me-2"></i>
                        Galleries
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}" class="ps-4" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div id="content">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row w-100">
                        <div class="col-4 ps-4">
                            <button type="button" id="sidebarCollapse" class="btn btn-dark">
                                <i class="fas fa-align-left"></i>
                            </button>
                        </div>
                        <div class="col-4">
                            <center>
                                <img src="{{ asset('assets/img/Logo.png') }}" alt="Logo Binus" width="90px">
                            </center>
                        </div>
                        <div class="col-4">
                            <div style="float: right">
                                <div class="dropdown">
                                    <div class="mt-1 logo-user">
                                        <img src="{{ asset('assets/img/User.png') }}" class="me-2" width="30px" alt="Logo admin">
                                        Deni Kurniawan
                                    </div>
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

    {{-- Bundle Boostrap 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Popper Boostrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"> </script>

    {{-- QuillJS --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script type="text/javascript">
        $('#sidebarCollapse').on('click',function(){
            $("#sidebar, #content").toggleClass("active");
        })

        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

    <script type="text/javascript">
        var i = 0;
        function preview_member(event, inp) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById("output_member" + inp);
                output.src = reader.result;
            };
        reader.readAsDataURL(event.target.files[0]);
        }

        jQuery(document).ready(function($) {
            //fadeout selected item and remove
            $(document).on("click", "#remove-member-fields", function(event) {
                event.preventDefault();
                $(this)
                .parent(300, function() {
                    $(this).empty();
                    return false;
                });
            });
            $('tbody').on('click', '.remove', function(){
                $(this).parent().parent().remove();
            });
            //add input
            $("#add-member-fields").click(function() {
                i++;
                var rows = '<tr>' +
                                '<td class="col-3"><input type="file" name="images[]" id="image" onchange="preview_member(event, '+ i + ')"></td>' +
                                '<td class="col-5"><img id="output_member'+ i + '" style="max-width:40%;margin: 10px"></td>' +
                                '<td class="col-2 text-center"><button class="btn btn-danger remove" id="remove-member-fields">- Remove</button></td>' +
                                '</tr>';
                $(rows)
                .appendTo("#team-member-fields");
                return false;
            });
        });
    </script>
</body>
</html>
