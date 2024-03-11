<!doctype html>
<html lang="en">

<head>
    <title>halaman perpustakaan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5);
            /* Ubah warna latar belakang sesuai keinginan Anda */
            border: none;
            border-radius: 5px;
            /* Ubah radius sesuai keinginan Anda */
            font-size: 24px;
            /* Ubah ukuran font sesuai keinginan Anda */
            color: white;
            /* Ubah warna teks sesuai keinginan Anda */
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7);
            /* Warna latar belakang saat tombol dihover */
        }
    </style>
</head>

<body>
    <header>

        @yield('header')
    </header>
    <main>
        <div class="container mt-5">
            @yield('bodycontainer')
        </div>
    </main>
    <footer>
        @include('layout.footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
