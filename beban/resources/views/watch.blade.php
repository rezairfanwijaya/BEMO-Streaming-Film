@extends('template.index')
@section('konten')

    <link rel="stylesheet" href="{{ asset('beban/public/css/watch.css') }}">



    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light" id="nav">
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


    <!-- main konten -->


    @foreach ($film as $item)
        <section>

            <video controls autoplay style="width: 100%">
                <source src="{{ url('beban/storage/app') }}/{{ $item['video'] }}">
            </video>

            <div class="container">
                <div class="cover-head">
                    <p class="judul-film">{{ $item['judul'] }}</p>
                    <div class="cover-head-kanan">
                        <div class="dark-mode">
                            <ion-icon name="moon" class="icon-dark" onclick="darkmode(true)"></ion-icon>
                            <ion-icon name="sunny" class="icon-light" onclick="darkmode(false)"></ion-icon>
                        </div>

                        <div class="add-ke-koleksi">
                            <a href="{{ route('user.add.koleksi', ['id'=>$item['id']]) }}" class="text-decoration-none">
                                <ion-icon name="bookmark" class="icon-add"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <div class="bungkus">
            <div class="body-content">
                <!-- sinopsis -->
                <section class="sinopsis-and-detail">
                    <div class="sinopsis">
                        <p class="judul">Sinopsis</p>
                        <p class="desc" style="text-align: justify">{!! $item['sinopsis'] !!}</p>
                    </div>
                </section>
    @endforeach

    <!-- sinopsis -->

    <!-- film populer -->
    <section class="film-populer">
        <div class="row for-flex">
            <div class="col-12">
                <p class="judul
                        ">
                    Film Populer
                </p>
            </div>

            @foreach ($populers as $populer)
                <div class="col-12 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('beban/storage/app') }}/{{ $populer['cover'] }}" class="card-img-top">
                        <div class="card-body">
                            <p class="judul-film">{{ $populer['judul'] }}</p>
                            <a href="{{ route('user.watch', ['film'=>$populer['id']]) }}" class="btn">Tonton</a>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
    </section>
    </div>
    </div>

    <!-- film populer -->



    <!-- Rekomendasi -->
    <div class="bungkus-rekomendasi">
        <section class="rekomendasi">
            <div class="row">
                <div class="col-12">
                    <p class="judul-rekomendasi">Rekomendasi</p>
                </div>

                @foreach ($rekomendasies as $rekomendasi)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('beban/storage/app') }}/{{ $rekomendasi['cover'] }}" class="card-img-top">
                        <div class="card-body">
                            <p class="judul-film">{{ $rekomendasi['judul'] }}</p>
                            <p class="text-muted">{{ $rekomendasi['durasi'] }}</p>
                        </div>

                        <div class="btn-tonton">
                            <a href="{{ route('user.watch', ['film'=>$rekomendasi['id']]) }}" class="btn tonton">Tonton</a>
                        </div>
                    </div>
                </div>    
                @endforeach
                
                
            </div>
        </section>
    </div>
    <!-- Rekomendasi -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="{{ asset('beban/public/js/watch.js') }}"></script>


    <!-- main konten -->

@endsection
