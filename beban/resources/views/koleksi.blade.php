@extends('template.index')
@section('konten')


    <link rel="stylesheet" href="{{ asset('beban/public/css/koleksi.css') }}">
    <!-- float botton -->
    <a href="#" class="text-decoration-none">
        <div class="float-botton">
            <ion-icon name="chevron-up" class="icon"></ion-icon>
        </div>
    </a>
    <!-- float botton -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('beban/public/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-items text-decoration-none" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-items text-decoration-none active" href="{{ route('user.koleksi') }}">Koleksiku</a>
                </div>

                <!-- search -->
                <form action="{{ route('user.cari.koleksi') }}" method="POST" class="cari-nav">
                    <div class="cari">
                        @csrf
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

    {{-- tampilkan pesan --}}
    @if (session()->has('pesan'))
        <div class="container alert alert-success text-center mt-3">{{ session()->get('pesan') }}</div>
    @endif


    <!-- judul koleksiku -->
    <div class="container">
        <section class="head-koleksi">
            <div class="judul-koleksi">
                <p class="judul">Koleksiku</p>
                <div class="titik"></div>
            </div>
        </section>
    </div>
    <!-- judul koleksiku -->


    <section class="main-konten">
        <div class="container">
            {{-- jika tidak ada kolkesi maka --}}
            @if ($count == 0)
                <div class="kosong d-flex flex-column justofy-content-center align-items-center">
                    <img src="{{ asset('beban/public/img/kosong.svg') }}" alt="" style="width: 50%">
                    <div class="keterangan mt-3">Belum ada koleksi</div>
                </div>

                {{-- jika ada maka --}}
            @else
                <div class="row">
                    @foreach ($koleksi as $item)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="{{ url('beban/storage/app') }}/{{ $item->cover }}" class="card-img-top">
                                <div class=" card-body ">
                                    <div class="sub-head-body ">
                                        <p class="judul">{{ $item->judul }}</p>
                                        <p class="text-muted durasi ">{{ $item->durasi }}</p>
                                    </div>

                                    <div class="footer-body ">
                                        <a href="{{ route('user.watch', ['film' => $item['id']]) }}"
                                            class="text-decoration-none text-white tonton">Tonton</a>

                                        {{-- hapus --}}
                                        <form action="{{ route('user.delete.koleksi', ['film' => $item['id']]) }}"
                                            method="POST">
                                            @method('DELETE')

                                            <button type="submit" class="btn hapus" data-toggle="tooltip"
                                                data-placement="bottom" title="Hapus Dari Koleksi">
                                                <ion-icon class="btn-hapus" name="trash-bin"></ion-icon>
                                            </button>

                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            @endif

        </div>
    </section>
    <!-- main content -->

@endsection
