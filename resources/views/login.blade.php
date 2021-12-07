<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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

    <div class="login d-flex justify-content-center align-items-center">
        <div class="login_form d-flex flex-column align-items-center">
            <img src="{{ asset('assets/img/Logo.png') }}" alt="Logo" class="my-3">
            <div class="login_card my-3 p-5 d-flex flex-column align-items-center">
                <h1>Welcome back!</h1>
                <p>Let’s create spectacular event again.</p>
                <form action="" class="my-3 d-flex flex-column align-items-center">
                    <div class="d-flex flex-column my-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" class="p-2">
                    </div>
                    <div class="d-flex flex-column my-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your Password" class="p-2">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Login</button>
                </form>
                <a href="#" class="my-3">Forget your password?</a>
            </div>
            <p class="my-3">Dont have a account? <a href="/register">Register</a></p>
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
