<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Web Sederhana</title>

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">


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
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">CV</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href={{ url('homeku') }}>Home</a>
                    <a class="nav-link" href={{ url('/cobablog') }}>Portofolio</a>
                    <a class="nav-link" href={{ url('/profile') }}>Profile</a>
                    <a class="nav-link" href={{ url('/article') }}>Article</a>
                    <a class="nav-link" href={{ url('/galeri') }}>Galery</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Sebuah Web Sederhana.</h1>
            <p class="lead">Ini adalah sebuah web sederhana yang saya buat sendiri menggunakan Framework Laravel</p>
            <p class="lead">
                <a href="cobablog" class="btn btn-lg btn-secondary">Get Started</a>
            </p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>©Pramudya Bagaskara</p>
            </div>
        </footer>
    </div>
</body>

</html>
