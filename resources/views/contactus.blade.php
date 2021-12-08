<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
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
                <div class="d-flex">
                    <a href="/register" class="h-100 mx-lg-3 p-lg-2 py-2 text-center">Register</a>
                    <a href="#" class="btn btn-outline-primary h-100 py-2 px-3">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="contact_page">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col h-100">
                    <div class="h-50 mb-5 d-flex align-items-end">
                        <div>
                            <h1>Contact Us</h1>
                            <p>Let me know if you have a questions.</p>
                        </div>
                    </div>
                    <div class="h-50 mt-5 d-flex align-items-start">
                        <div class="h-50 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="media_brand p-2 mr-2 d-flex justify-content-center align-items-center rounded">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <p class="m-0">HIMFO Binus Malang</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="media_brand p-2 mr-2 d-flex justify-content-center align-items-center rounded">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <p class="m-0">0812 1201 1230</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="media_brand p-2 mr-2 d-flex justify-content-center align-items-center rounded">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <p class="m-0">@himfobinusmalang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <form class="d-flex flex-column">
                        <div class="my-3 d-flex flex-column">
                            <label for="nama" class="font-weight-bold">Your name</label>
                            <input type="text" name="nama" id="nama">
                        </div>
                        <div class="my-3 d-flex flex-column">
                            <label for="email" class="font-weight-bold">Your e-mail</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="my-3 d-flex flex-column">
                            <label for="message" class="font-weight-bold">Your message</label>
                            <textarea name="message" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="my-3 btn btn-dark">Send</button>
                    </form>
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

    <script>
        // DOM => Document Object Manipulation?
        document.querySelector(".contact_page form").addEventListener('submit', (e) => {
            e.preventDefault()
            alert('Thank you! Your message has been sent to our team, please wait 1x24 for our reply.')
            // Tampilin Modal
            // <div class="modal d-none"> -> Tidak muncul & terlihat
            // .modal {
            //      position: absolute;
            //      top: 50%;
            //      left: 50%;
            //      transform: translateX(50%), translateY(50%);
            // }
            // Ketika form di-submit, tampilkan modal
            // document.querySelector('.modal').classList.remove('d-none')
            // document.querySelector('.modal').classList.add('d-block')
            // Tutup modal ketika button "Ok!" di-click
            // document.querySelector('.modal .button').addEventListener('click', (e) => {
            //        document.querySelector('.modal').classList.remove('d-block') 
            //        document.querySelector('.modal').classList.add('d-none') 
            // })
            // Referensi: w3schools.com, developers.mozilla.com, googling
        })
    </script>
</body>
</html>