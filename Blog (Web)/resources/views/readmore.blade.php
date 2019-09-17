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
    <title>Article - Pramudya</title>

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
                        href="#">Article</a>
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





        <main role="main" class="container">
            <div class="row">
                @csrf
                <div class="card" style="margin-bottom:30px; font-family: 'Quicksand', sans-serif;">
                    <div class="card-body">
                        <h3 class="pb-3 font-italic border-bottom"
                            style="margin-bottom:2%; margin-bottom:30px; font-family: 'Quicksand', sans-serif;">
                            {{ $blog->judul }}</h3>
                        <div class="text-center mb-5">
                            <img src="{{ asset('image/'.$blog->foto) }}" alt=""
                                style="width:50%; margin-bottom:30px; margin:0px auto;">
                        </div>
                        @foreach($blog->tag as $d)
                        <span class="text-light border bg-dark ml-5 p-1 rounded">{{ $d['nama_tag'] }}</span>
                        @endforeach
                        <h6 style="font-family: 'Quicksand', sans-serif;" class="mt-5 ml-5">{!! $blog->desc !!}</h6>
                    </div>
                </div>

            </div><!-- /.blog-main -->



            <!-- Komentar -->
            @guest
            <div class="container mt-5">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-body">
                            <h3 class="pb-3 font-italic border-bottom"
                                style="margin-bottom:2%; margin-bottom:30px; font-family: 'Quicksand', sans-serif;">
                                Comment</h3>
                            <form action="{{route('tbh_komen')}}" method="POST" class="row">
                                @csrf

                                <input type="hidden" name="komenid" value="{{$blog->id}}">

                                <div class="col-md-6 mb-2">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    <textarea class="mt-3 description" name="komen" cols="120" rows="10"
                                        placeholder="Comment"></textarea>
                                    <button class="btn btn-primary mt-3">Kirim</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @else
            <div class="container mt-5">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-body">
                            <h3 class="pb-3 font-italic border-bottom "
                                style="margin-bottom:2%; margin-bottom:30px; font-family: 'Quicksand', sans-serif;">
                                Comment</h3>
                            <form action="{{route('tbh_komen')}}" method="POST" class="row">
                                @csrf

                                <input type="hidden" name="komenid" value="{{$blog->id}}">
                                <div class="col-md-3 mb-2">
                                    <input type="hidden" name="nama" class="form-control"
                                        value="{{Auth::user()->name}}">
                                    <textarea class="mt-3 description" name="komen" cols="90" rows="10"
                                        placeholder="Comment"></textarea>
                                    <button class="btn btn-primary mt-3">Kirim</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @endguest
            <div class="container mt-5 ">
                <div class="row">
                    <div class="card col-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h3 class="pb-3 font-italic border-bottom"
                                    style="margin-bottom:2%; margin-bottom:30px; font-family: 'Quicksand', sans-serif;">
                                    Recent Comment</h3>
                                <div class="container mt-4">
                                    @foreach($blog2 as $d)
                                    <div class="row mb-3">
                                        <div class="col-md-2 text-center border-right" style="margin-left: -20px;">
                                            <!-- Nama Pengomentar -->
                                            <img src="{{ asset('image/user.png') }}" class="rounded-circle"
                                                style="width: 50%;">
                                            <p class="mt-1 border rounded">{{ $d->nama }}</p>
                                        </div>
                                        <div class="col-md-10 bg-primary rounded p-2">
                                            <!-- Komentar -->
                                            <p class="text-light">{!! $d->komen !!}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div><!-- /.row -->

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
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea.description',
                width: 900,
                height: 300
            });

        </script>
</body>

</html>
@endsection
