@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Galery - Pramudya</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#"></a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" style="font-family: 'Quicksand', sans-serif;"
                        href="#">Galery</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-3" focusable="false" role="img">


                        </svg>
                    </a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="nav-link active" href={{ url('homeku') }}>Home</a>
                <a class="nav-link" href={{ url('/cobablog') }}>Portofolio</a>
                <a class="nav-link" href={{ url('/profile') }}>Profile</a>
                <a class="nav-link" href={{ url('/article') }}>Article</a>
                <a class="nav-link" href={{ url('/galeri') }}>Galery</a>
            </nav>
        </div>



        <div class="jumbotron p-3 p-md-5 text-white rounded">
            <div class="row">

                <div class="col-md-6 px-0 ">
                    <img src="{{asset('image/IMG_20190123_175714.jpg')}}" alt="" width="60%">
                </div>
                <div class="col-md-6 mt-md-5">
                    <h1 style="font-family: 'Open Sans', sans-serif;">Hanya seorang pelajar yang mempelajari hal
                        tentang sofware komputer</h1><a href="#poto_atas">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>



        
        <div class="row md-5">
        @foreach($get as $b)
            <div class="col-md-4">
                <div class="card mt-5" style="width: 18rem;">
                    <img src="{{ asset('image/'.$b->gambar) }}" alt="" style="width:100%;">
                    <div class="card-body">
                        <p class="card-text">{{ $b->desc}}</p>
                    </div>

                </div>
            </div>
            @endforeach    
        </div>
        <!-- /.row -->

        </main><!-- /.container -->
        <div class="mt-5">
            <footer class="blog-footer" class="">
                <p>Pramudya Bagaskara</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>
        </div>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')

        </script>
        <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous">
        </script>
</body>

</html>
@endsection
