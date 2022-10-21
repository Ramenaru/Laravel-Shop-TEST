<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ra' | Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
        <!-- icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="/fs/css/all.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="/bootstrap/css/bootstarp.min.css">
        

    </head>
    <body>

        @include('part.nav')
        @include('part.header')
        <div class="nav justify-content-center mt-3">
            <div class="card-footer mt-3 p-3 pt-0 border-top-0 bg-transparent nav-link">
                <div class="text-center">
                <a class="btn btn-outline-dark mt-auto fw-bold" href="">Shirts</a></div>
            </div>
            <div class="card-footer mt-3 p-3 pt-0 border-top-0 bg-transparent nav-link">
                <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="{{route('home2')}}">Shoes</a></div>
            </div>
            <div class="card-footer mt-3 p-3 pt-0 border-top-0 bg-transparent nav-link">
                <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="{{route('home3')}}">Acc</a></div>
            </div>
        </div>

        @include('part.card')


        @include('part.footer')
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="/bootstrap/js/bootstarp.bundle.min.js"></script>
        {{-- <script src="/fs/js/all.js"></script> --}}
    </body>
</html>