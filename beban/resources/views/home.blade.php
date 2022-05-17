@extends('template.index')
@section('konten')
    {{-- @dd($key) --}}
    {{-- css external homepage --}}
    <link rel="stylesheet" href="beban/public/css/homepage.css">

    <!-- float botton -->
    <a href="#" class="text-decoration-none">
        <div class="float-botton"data-aos="fade-right" data-aos-offset="200" data-aos-delay="80"
        data-aos-duration="800">
            <ion-icon name="chevron-up" class="icon"></ion-icon>
        </div>
    </a>
    <!-- float botton -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('beban/public/img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-items text-decoration-none active" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-items text-decoration-none" href="{{ route('user.koleksi') }}">Koleksiku</a>
                </div>

                <!-- search -->
                <form action="{{ route('user.cari') }}" class="cari-nav" method="POST">
                    @csrf
                    <div class="cari">
                        <input type="text" name="keyword" placeholder="Cari film disini">
                        <button type="submit">
                            <ion-icon name="search" class="icon-cari"></ion-icon>
                        </button>
                    </div>
                </form>

                <!-- profile for desktop -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="dropdown">
                        <div class="profile-desktop" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                            <p><strong>{{ $inisial }}</strong></p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button type="submit" class="dropdown-item">Keluar</button>
                        </div>
                    </div>
                </form>
                <!-- profile for mobile dan tablet -->
                <div class="profile-tab-mobile">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn" type="submit">
                            <ion-icon name="log-out-sharp" class="icon-keluar"></ion-icon>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->


    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="beban/public/img/jumbotron.png" class="d-block w-100" alt="carousel1">
                <div class="carousel-caption">
                    <div class="caption">
                        <p class="parent">Jelajahi Film</p>
                    </div>
                    <div class="sub-caption">
                        <p class="parent">Terbaru</p>
                    </div>
                    <div class="btn-tonton">
                        <a href="#main" class="text-decoration-none text-white">Jelajahi Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="beban/public/img/jumbotron.png" class="d-block w-100" alt="carousel2">
                <div class="carousel-caption">
                    <div class="caption">
                        <p class="parent">Lihat Koleksi</p>
                    </div>
                    <div class="sub-caption">
                        <p class="parent">Kumpulan film Favorit anda</p>
                    </div>
                    <div class="btn-tonton">
                        <a href="{{ route('user.koleksi') }}" class="text-decoration-none text-white">Lihat Koleksi</a>
                    </div>
                </div>
            </div>
           
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- carousel -->

    <!-- button cari -->
    <section class="cari">
        <p class="text-center judul-cari">Cari Film</p>
        <form action="{{ route('user.cari') }}" method="POST">
            @csrf
            <div class="cari-form">
                <input type="search" name="keyword" placeholder="Cari film disini">
                <button type="submit">
                    <ion-icon name="search" class="icon-cari"></ion-icon>
                </button>
            </div>
        </form>
    </section>
    <!-- button cari -->

    <!-- main content -->
    <section class="main-konten" id="main">
        <div class="container">


            {{-- jika tidak ada film --}}
            @if ($count === 0)
                <div class="kosong d-flex flex-column justofy-content-center align-items-center">
                    <img src="{{ asset('beban/public/img/kosong.svg') }}" alt="" style="width: 50%">
                    <div class="keterangan mt-3">Data Film Kosong</div>
                </div>

            @else
                <div class="row">
                    {{-- jika ada film --}}
                    @foreach ($films as $film)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="beban/storage/app/{{ $film['cover'] }}" class="card-img-top">
                                <div class="card-body">
                                    <div class="sub-head-body">
                                        <p class="judul">{{ $film['judul'] }}</p>
                                        <p class="text-muted durasi ">{{ $film['durasi'] }}</p>
                                    </div>

                                    <div class="footer-body ">
                                        <a href="{{ route('user.watch', ['film'=>$film['id']]) }}" class="text-decoration-none text-white ">Tonton</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            @endif


        </div>
        </div>
    </section>
    <!-- main content -->
@endsection
