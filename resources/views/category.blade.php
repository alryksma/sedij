{{-- @dd($category) --}}
@extends('layout.layouts')

@section('header')
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background
                            context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link
                            them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">hubungu kami</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">whatsapp</a></li>
                            <li><a href="#" class="text-white">email</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    @include('layout.nav')

    <main>
        <div class="navbar  justify-content-center d-flex">
            <div class="container-fluid text-center mx-auto justify-content-center">
                <form class="d-flex" role="search" action=''>
                    <input class="form-control me-2 text-center justify-content-center" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <section class="py-5 text-center container">
            <h4 class="text-center">{{ $title }}</h4>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">


                <h3 class="text-center"> semua buku </h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($books as $bok)
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                                <img src="{{ $bok->image }}" alt="">

                                <div class="card-body">
                                    <p class="card-text">{{ $bok->deskripsis }}</p>
                                    {{-- {{!! $bok->deksripsis !!}} --}}

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </main>
@endsection
