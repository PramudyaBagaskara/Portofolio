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
    <title>Aritcle 1 - Pramudya</title>

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
                    <a class="blog-header-logo text-dark" style="font-family: 'Quicksand', sans-serif;" href="#">My
                        Article</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"
                            focusable="false" role="img">


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
            </nav>
        </div>



        <div class="jumbotron p-3 p-md-5 text-white rounded">
            <img src="{{asset('image/laravel2.jpg')}}" alt="" width="100%">
        </div>
    </div>


    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Article 1
                </h3>

                <div class="blog-post">
                    <div id="poto_atas">
                        <h2 class="blog-post-title" style="font-family: 'Sanchez', serif;">Apa Itu Laravel ?</h2>
                        <p class="blog-post-meta">January 26, 2019 by <a href="#">Pramudya Bagaskara</a></p>

                        <p>Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep
                            MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis
                            dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi
                            biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja
                            dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.</p>

                        <p>MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari
                            presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti :
                            manipulasi data, controller, dan user interface.</p>
                        <li>Model: Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu
                            seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan
                            data dan lain-lain.</li>
                        <li>View: View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman
                            web.</li>
                        <li>Controller: Controller merupakan bagian yang menjembatani model dan view.</li>
                        <br>
                        <br>
                        <p>Beberapa fitur yang terdapat di Laravel :</p>
                        <li>Bundles, yaitu sebuah fitur dengan sistem pengemasan modular dan tersedia beragam di aplikasi.</li>
                        <li>Eloquent ORM, merupakan penerapan PHP lanjutan menyediakan metode internal dari pola “active record” yang menagatasi masalah pada hubungan objek database.</li>
                        <li>Application Logic, merupakan bagian dari aplikasi, menggunakan controller atau bagian Route.</li>
                        <li>Reverse Routing, mendefinisikan relasi atau hubungan antara Link dan Route.</li>
                        <li>Restful controllers, memisahkan logika dalam melayani HTTP GET and POST.</li>
                        <li>Class Auto Loading, menyediakan loading otomatis untuk class PHP.</li>
                        <li>View Composer, adalah kode unit logikal yang dapat dieksekusi ketika view sedang loading.</li>
                        <li>IoC Container, memungkin obyek baru dihasilkan dengan pembalikan controller.</li>
                        <li>Migration, menyediakan sistem kontrol untuk skema database.</li>
                        <li>Unit Testing, banyak tes untuk mendeteksi dan mencegah regresi.</li>
                        <li>Automatic Pagination, menyederhanakan tugas dari penerapan halaman.</li>
                        <br>


                    </div>
                </div><!-- /.blog-post -->


                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="article2">Article Sebelumya</a>
                    <a class="btn btn-outline-secondary" href="article2">Article Selanjutnya</a>
                    <a class="btn btn-outline-primary" href="article">Kembali Ke Halaman Article</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
               

            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
        <p>Pramudya Bagaskara</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
