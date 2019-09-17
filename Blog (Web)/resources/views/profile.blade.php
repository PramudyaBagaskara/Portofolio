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
    <title>Profile - Pramudya</title>

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
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
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
                        Profile</a>
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


        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary" style="font-family: 'PT Sans', sans-serif;">Laravel</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="article1" style="font-family: 'PT Sans', sans-serif;">Laravel post</a>
                        </h3>
                        <div class="mb-1 text-muted">Jan 31</div>
                        <p class="card-text mb-auto">Jika ingin mengetahui tentang apa itu laravel dan kelebihan
                            kekurangan silahkan klik link article berikut ini.</p>
                        <a href="article1">Continue reading</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">PHP</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="article2" style="font-family: 'PT Sans', sans-serif;">PHP Post</a>
                        </h3>
                        <div class="mb-1 text-muted">Jan 31</div>
                        <p class="card-text mb-auto">Jika ingin mengetahui tentang apa itu php dan kelebihan kekurangan
                            silahkan klik link article berikut ini.</p>
                        <a href="article2">Continue reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>

                <div class="blog-post">
                    <div id="poto_atas">
                        <h2 class="blog-post-title" style="font-family: 'Sanchez', serif;">Tentang Saya</h2>
                        <p class="blog-post-meta">January 26, 2019 by <a href="#">Pramudya Bagaskara</a></p>

                        Nama saya Pramudya Satrio Bagaskara saya lahir di Jakarta 20 December 2002 saya berumur 16
                        tahun,saya bersekolah di SMK Taruna Bhakti saya berada di kelas XI RPL 2 saya berniat masuk SMK
                        Tatuna Bhakti karena saya ingin menjadi proggramer dan saya juga igin mempelajari berbagai hal
                        tentang software-software yang ada di dalam sebuah komputer atau laptop, saya mempunyai 2 orang
                        kakak dan saya adalah anak terakhir saya juga mempunyai hobi yaitu bermain game dan olahraga
                        sedikit seperti lari dll
                        <br>


                    </div>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title" style="font-family: 'Sanchez', serif;">Data Diri</h2>
                    <p class="blog-post-meta">January 31, 2019 by <a href="#">Pramudya Bagaskara</a></p>

                    Nama: Pramudya Satrio Bagaskara<br>
                    Nama Panggilan: Pramudya atau Bagas<br>
                    Tempat/Tanggal Lahir : Jakarta 20 Desember 2002 <br>
                    Umur : 16 Tahun <br>
                    Alamat: Jl. Leci 1 no 3 RT04/18 Pondok Sukatani Permai<br>
                    Jenis Kelamin: Laki - Laki <br>
                    Jurusan: Rekayasa Perangkat Lunak<br>
                    Alasan Sekolah Di TB: Saya ingin mempelajari software dan menjadi programmer <br>
                    Status: Pelajar

                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title" style="font-family: 'Sanchez', serif;">Adittional Data</h2>
                    <p class="blog-post-meta">January 31, 2019 by <a href="#">Pramudya Bagaskara</a></p>

                    <p>Hobi:</p>
                    <ol>
                        <li>Bermain Game</li>
                        <li>Joging</li>
                        <li>Nonton</li>
                        <li>Tidur</li>
                        <li>Main Bulu Tangkis</li>
                    </ol>
                    <p>Makanan Kesukaan:</p>
                    <ul>
                        <li>Udang Goreng Tepung</li>
                        <li>Kwetiaw Kuah</li>
                        <li>Sate Padang</li>
                        <li>Sate Ayam</li>
                        <li>Ketoprak</li>
                    </ul>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="cobablog">Back</a>
                    <a class="btn btn-outline-secondary" href="article">Next</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                

                <div class="p-3">
                    <h4 class="font-italic">Find Me On</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/PramudyaBagaskara" target="_Blank">GitHub</a></li>
                        <li><a href="https://www.instagram.com/pramudyabgskra/" target="_Blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100010575677407" target="_Blank">Facebook</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Web CV Yang Sudah Saya Buat</h4>
                    <ol class="list-unstyled">
                        <li><a href="http://bagaskara20.dx.am" target="_Blank">Click Here</a></li>
                    </ol>
                </div>
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
