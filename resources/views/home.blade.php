{{ @dd($kategori) }}
@extends('layout.layouts')

@section('header')
    @include('layout.nav')
    <div class="d-flex justify-content-center ">
        <img src="https://source.unsplash.com/2100x500?school" alt="" class="img-fluid">
    </div>
    <div class="navbar  justify-content-center d-flex">
        <div class="container-fluid text-center mx-auto justify-content-center">
            <form class="d-flex" role="search" action=''>
                <input class="form-control me-2 text-center justify-content-center" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    {{-- <div class="input-group mb-3 justify-content-center">
        <form action="" method="GET">
            <input type="hidden" name="search" value="search">
            <input type="text" class="form-control w-100 text-center" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" placeholder="masukan nama buku" id="">
        </form>
    </div> --}}
@endsection



@section('bodycontainer')
    <section class="container mt-5">
        <h4 class="text-center">kategori buku</h4>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kategori->nama }}</h5>
                        <p class="card-text">{{ $kategori->slug }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5 text-center justify-content-center">
        <h4 class="mb-3">Buku Terbaru</h4>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/500x500?onebook" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x500?onebook" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x500?onebook" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x500?onebook" class="d-block w-100" alt="Slide 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="container mt-5">
        <h4 class='''>Penikmat koleksi bulan ini<br>

        </h4>
        <small>Pengunjung terbaik ada disini, rajin rajinlah membaca</small>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/500x500?siswa" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x500?siswa" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x500?siswa" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </section>
    <section class="container mt-5">
        <h4>Statistik bulan ini</h4>
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3">
                    Column
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3">
                    Column
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3">
                    Column
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3">
                    Column
                </div>

            </div>
        </div>
    </section>
    <section class="container mt-5">
        <div class="row align-items-center">
            <div class="col">
                <img src="https://source.unsplash.com/500x500?school" alt="">
            </div>
            <div class="col">
                <h4>Perpustakaan XXXXX</h4>
                <h5>Jam Layanan</h5>
                <p><strong>Senim-Jumat</strong></p>
                <p class="mb-5">07.00 - 15.00 WIB</p>
                <p>alamat: </p>
                <p>Jl kabupaten, Kec sendangadi, Kab. Sleman, Yogyakarta</p>
                <p>Telp: 0849824243</p>
            </div>
        </div>
    </section>
@endsection
