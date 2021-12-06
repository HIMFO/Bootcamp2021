<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register Page</title>
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
        <img class="background-login" src="{{ asset('assets/img/Bg-Login.png') }}" alt="Backgroud Login">
        <div class="container">
            <div class="row justify-content-center " style="height: 100vh;">
                <div class="col-8 pt-4 mb-3 align-self-center">
                    {{-- header --}}
                    <div class="row">
                        <div class="col-2">
                            <a class="btn btn-light" href="/">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                        <div class="col-8">
                            <div class="row justify-content-center mb-4">
                                <img src="{{ asset('assets/img/Logo.png') }}" height="60px" alt="Logo Binus">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h1 style="font-weight: 700 !important">Welcome!</h1>
                    </div>
                    {{-- end header --}}
                    {{-- form register --}}
                    <div class="row justify-content-center mb-4">
                        <div class="card br-2 box-shadow-on">
                            <p class="mt-3 fs-15 text-center">Let's create an account first, okay ?</p>
                            <div class="card-body px-5">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control br-1" id="email" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" minlength="8" class="form-control br-1" id="password" placeholder="password min. 8 char">
                                </div>
                                <div class="mb-3s">
                                    <label for="confirm-password" class="form-label">Confirm Password</label>
                                    <input type="password" minlength="8" class="form-control mb-4 br-1" id="confirm-password" placeholder="Confirm password min. 8 char">
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-dark w-100 br-1">
                                        Register
                                    </button>
                                </div>
                                <div class="mb-3 text-center">
                                    <a href="#" class="fc-dark">Forget your password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end form regiter --}}
                    {{-- footer --}}
                    <div class="row justify-content-center">
                        <p class="text-center mb-3 fs-15">
                            Already have an account ?
                            <a href="/" class="fc-dark"><b>Login</b></a>
                        </p>
                    </div>
                    {{-- end footer --}}
                </div>
            </div>
        </div>
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
