<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <!-- Data AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    {{-- favicon --}}
    <link rel="icon" href="{{ asset('beban/public/img/logo.png') }}">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



    <title>{{ $title }}</title>


</head>

<body>

    @yield('konten')

   <!-- footer -->
   <section class="footer ">
    <footer>
        <div class="body ">

            <div class="col-12 col-lg-4 body item body d-flex flex-column ">
                <img src="{{ asset('beban/public/img/logo.png') }}" alt="logo" class="logo">
                <p class=b"desc-logo text-left mt-3">Bemo menyediakan film terbaru dan terhangat
                </p>
            </div>

            <div class="kontak">
                <p class="judul">Kontak Kami</p>
                <div class="telpon">
                    <ion-icon name="call" class="icon-kontak"></ion-icon>
                    0834-890-99
                </div>
                <div class="gmail">
                    <ion-icon name="mail" class="icon-kontak"></ion-icon>
                    bemo@official.com
                </div>
            </div>

            <div class="sosmed">
                <p class="judul ">Sosial Media</p>
                <div class="icon">
                    <ion-icon class="icon-sosmed" name="logo-instagram"></ion-icon>
                    <ion-icon class="icon-sosmed" name="logo-twitter"></ion-icon>
                    <ion-icon class="icon-sosmed" name="logo-facebook"></ion-icon>
                </div>
            </div>
        </div>

        <p class="copyright ">Bemo - Beban Movie 2021</p>

        </div>
    </footer>
</section>
<!-- footer -->






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


    {{-- js external --}}
    <script src="beban/public/js/login.js"></script>

    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
