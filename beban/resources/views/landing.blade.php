<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Data AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- CSS External --}}
    <link rel="stylesheet" href="beban/public/css/landing.css">

    {{-- favicon --}}
    <link rel="icon" href="beban/public/img/logo.png">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>{{ $title }}</title>
</head>

<body>
    {{-- pesan berhasil logout --}}
    @if (session()->has('pesan'))
        <div class="alert alert-success text-center">{{ session()->get('pesan') }}</div>
    @endif


    <!-- float botton -->
    <a href="#" class="text-decoration-none">
        <div class="float-botton" data-aos="fade-right" data-aos-offset="200" data-aos-delay="80"
            data-aos-duration="800">
            <ion-icon name="chevron-up"></ion-icon>
        </div>
    </a>
    <!-- float botton -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light ">

        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="beban/public/img/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-items text-decoration-none active" href="{{ route('landing') }}">Beranda</a>
                <a class="nav-items text-decoration-none" href="#fitur">Fitur</a>
                <a class="nav-items text-decoration-none" href="#tentang-kami">Tentang Kami</a>
                <a class="nav-items text-decoration-none" href="#testimonial">Testimonial</a>
                <a class="nav-items text-decoration-none" href="#kontak">Kontak</a>
            </div>
            <a href="{{ route('login') }}" class="btn masuk">Masuk</a>

        </div>

    </nav>
    <!-- navbar -->

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="beban/public/img/jumbotron.png" class="d-block w-100" alt="carousel1">
                <div class="carousel-caption">
                    <div class="caption">
                        <p class="parent">Avengers</p>
                    </div>
                    <div class="sub-caption">
                        <p class="parent">Infinity Wars</p>
                    </div>
                    <div class="btn-tonton">
                        <a href="{{ route('login') }}" class="text-decoration-none text-white">Tonton Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="beban/public/img/jumbotron.png" class="d-block w-100" alt="carousel2">
                <div class="carousel-caption">
                    <div class="caption">
                        <p class="parent">Avengers</p>
                    </div>
                    <div class="sub-caption">
                        <p class="parent">Infinity Wars</p>
                    </div>
                    <div class="btn-tonton">
                        <a href="{{ route('login') }}" class="text-decoration-none text-white">Tonton Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="beban/public/img/jumbotron.png" class="d-block w-100" alt="carousel3">
                <div class="carousel-caption">
                    <div class="caption">
                        <p class="parent">Avengers</p>
                    </div>
                    <div class="sub-caption">
                        <p class="parent">Infinity Wars</p>
                    </div>
                    <div class="btn-tonton">
                        <a href="{{ route('login') }}" class="text-decoration-none text-white">Tonton Sekarang</a>
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


    <!--fitur -->
    <section class="fitur" id="fitur">

        <div class="row">

            <!-- fitur mode bioskop -->
            <div class="col-12">
                <p class="judul-fitur" data-aos="fade-right" data-aos-offset="200" data-aos-delay="80"
                    data-aos-duration="800"><span>Apa Kelebihan</span> Website BEMO</p>
                <p class="desc-judul-fitur" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    BEMO membarikan kenyamanan lebih kepada pelanggan melalui fitur-fitur menarik
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <p class="judul-fitur-sub text-center">
                    Mode Bioskop
                </p>

                <p class="desc-sub-fitur">Mode bioskop akan mengubah tampilan website menjadi dark mode dan akan
                    memanjakan
                    mata penonton sehingga memberikan kenyamanan saat menonton file favorit</p>
            </div>

            <div class="col-12 col-lg-6">
                <div class="gambar-mode-bioskop">
                    <img src="beban/public/img/fitur_modebioskop.png" alt="" data-aos="fade-up" data-aos-offset="200"
                        data-aos-delay="50" data-aos-duration="1000">
                </div>
            </div>

            <!-- fitur koleksi -->
            <div class="col-12 col-lg-6 fitur">
                <div class="gambar-fitur">
                    <img src="beban/public/img/fitur_koleksi.png" alt="" data-aos="fade-up" data-aos-offset="200"
                        data-aos-delay="50" data-aos-duration="1000">
                </div>
            </div>

            <div class="col-12 col-lg-6 fitur">
                <p class="judul-fitur-sub text-center">
                    Fitur Koleksi
                </p>
                <p class="desc-sub-fitur">Kami akan menyimpan semua film favorit anda dan akan memudahkan anda saat
                    ingin
                    menonton film sehingga tidak usah mencari film secara terus menerus</p>
            </div>
        </div>

    </section>
    <!--fitur -->

    <!-- tentang kami -->
    <section id="tentang-kami">
        <div class="row">
            <div class="col-12">
                <p class="judul-fitur" data-aos="fade-right" data-aos-offset="200" data-aos-delay="80"
                    data-aos-duration="800">
                    Siapakah <span>Kami ?</span>
                </p>
                <p class="desc-judul-fitur" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    Mari kenali kami lebih jauh lagi
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <p class="judul-fitur-sub text-center">
                    BEMO (Beban Movie)
                </p>
                <p class="desc-sub-fitur">Website BEMO (Beban Movie) merupakan website streaming film online karya dari
                    sekelompok mahasiswa yang bertujuan untuk mengatasi masalah dalam masyarakat terkhusus di bidang
                    hiburan. Kami datang membawa solusi berupa website yang modern,fitur
                    yang canggih serta film-film terbaru yang sangat sayang untuk dilewatkan.
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <div class="gambar-tentang-kami">
                    <img src="beban/public/img/tentangkami coba.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- tentang kami -->


    <section class="testi" id="testimonial">
        <div class="row">
            <div class="col-12">
                <p class="judul-fitur-testi" data-aos="fade-right" data-aos-offset="200" data-aos-delay="80"
                    data-aos-duration="800">
                    Apa <span>kata mereka </span> tentang website BEMO
                </p>
                <p class="desc-judul-fitur" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    Pengguna website kami merasakan kepuasan dalam menonton film yang mereka sukai
                </p>
            </div>

            <div class="col-12 col-lg-4">
                <div class="kartu-testi" data-tilt>
                    <img src="beban/public/img/testimonial-1.png" alt="">
                    <p class="captio-testi">“ Menonton film menjadi lebih nyaman dan sangat mengibur diwaktu akhir
                        pekan
                        dengan keluarga“</p>
                    <img src="beban/public/img/rating.png" alt="">
                </div>
            </div>
            <div class="col-12  col-lg-4">
                <div class="kartu-testi" data-tilt>
                    <img src="beban/public/img/testimonial-2.png" alt="">
                    <p class="captio-testi">“ Saya sealu menghabiskan waktu akhir pekan saya dengan menikmati film
                        terbaru
                        dari BEMO “</p>
                    <img src="beban/public/img/rating.png" alt="">
                </div>
            </div>
            <div class="col-12  col-lg-4">
                <div class="kartu-testi" data-tilt>
                    <img src="beban/public/img/testimonial-3.png" alt="">
                    <p class="captio-testi"> “ Mejadikan santai bersama keluarga menjadi lebih hangat dan menyenangkan
                        bersama BEMO “</p>
                    <img src="beban/public/img/rating.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="kontak">
        <div class="row">
            <div class="col-12  item head-footer">
                <p>Saksikan film-film terbaru dengan bergabung bersama kami</p>
                <a href="{{ route('login') }}" class="text-decoration-none masuk-footer">Masuk</a>
            </div>


            <div class="col-12 col-lg-4 body item body">
                <img src="beban/public/img/logo.png" alt="logo">
                <p class="desc-logo text-left">Bemo menyediakan film terbaru dan terhangat
                </p>
            </div>

            <div class="col-12 col-lg-4 body item">
                <div class="kontak-kami">
                    <p class="kontak">Kontak Kami</p>
                    <div class="detail">
                        <div class="detail-kontak">
                            <ion-icon class="icon" name="call"></ion-icon>
                            <p>0834-890-99</p>
                        </div>

                        <div class="detail-kontak">
                            <ion-icon class="icon" name="mail"></ion-icon>
                            <p>bemo@official.com</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 item col-lg-4 body sosmed">
                <p class="sosmed">Sosial Media</p>
                <div class="detail-sosmed">
                    <ion-icon class="icon-sosmed" name="logo-instagram"></ion-icon>
                    <ion-icon class="icon-sosmed" name="logo-twitter"></ion-icon>
                    <ion-icon class="icon-sosmed" name="logo-facebook">
                    </ion-icon>
                </div>
            </div>

            <div class="col-12 copyright">
                <p class="text-center">
                    Salam hangat dari kelompok beban <span>&#9829</span>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>
