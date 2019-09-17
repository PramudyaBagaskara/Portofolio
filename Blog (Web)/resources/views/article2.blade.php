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
    <title>Article 2 - Pramudya</title>

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
            <img src="{{asset('image/php.png')}}" alt="" width="100%">
        </div>
    </div>


    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Article 2
                </h3>

                <div class="blog-post">
                    <div id="poto_atas">
                        <h2 class="blog-post-title" style="font-family: 'Sanchez', serif;">Apa Itu PHP ?</h2>
                        <p class="blog-post-meta">January 26, 2019 by <a href="#">Pramudya Bagaskara</a></p>

                        <p>PHP adalah singkatan dari PHP : Hypertext Preprocessor. Di mana huruf ‘P’ pada kata PHP
                            merupakan singkatan dari kata PHP itu sendiri atau yang sering disebut rekursif.
                            Maksud dari rekursif adalah PHP memiliki kemampuan / fungsi untuk memanggil dirinya
                            sendiri. Pengertian PHP adalah bahasa pemrograman script server side yang sengaja dirancang
                            lebih cenderung untuk membuat dan mengembangkan web.</p>

                        <p>PHP merupakan bahasa pemrograman paling populer yang digunakan dalam membuat sebuah website.
                            Berdasarkan survei dari Wtechs, bahasa pemrograman PHP merupakan bahasa pemrograman
                            server-side yang paling populer dibandingkan ASP.NET maupun dengan Java.
                            Untuk yang belum tahu perbedaan server side scripting dan client side scripting, bisa klik
                            tulisan ini agar Anda tahu perbedaan client side scripting dan served side scripting
                            beserta kelebihan, kekurangan, contoh, dan fungsinya.</p>

                        <p>PHP sudah sangat terkenal di kalangan masyarakat dan itu sebabnya banyak CMS seperti Joomla,
                            WordPress, Drupal menggunakan PHP sebagai pondasi dalam mereka membangun sebuah website.</p>

                        <br>

                        <p>Kelebihan PHP :</p>
                        <li>Mememiliki Community yang besar</li>
                        <li>Perkembangan Yang Cepat</li>
                        <li>Open Source</li>
                        <li>Ringkas</li>
                        <li>PHP sudah sangat terkenal di kalangan masyarakat dan itu sebabnya banyak CMS seperti
                            Joomla, WordPress, Drupal menggunakan PHP sebagai pondasi dalam mereka membangun sebuah
                            website.</li>
                        <br>
                        <p>Kekurangan PHP:</p>
                        <li>Pemogramman php ini memiliki kelemahan dalam keamanan tertentu jika dalam penggunaannya
                            programmer tidak jeli dalam melakukan proses pemrogramman dan kurang memperhatikan isu
                            konfigurasi php.</li>
                        <li>Tidak ada tipe data pada PHP.</li>
                        <li>Source Code dapat dilihat client.</li>
                        <li>Untuk menggunakannya, harus menginstal web server terlebih dahulu.</li>
                        <br>


                    </div>
                </div><!-- /.blog-post -->


                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="article1">Article Sebelumya</a>
                    <a class="btn btn-outline-secondary" href="article1">Article Selanjutnya</a>
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
