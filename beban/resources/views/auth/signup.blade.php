{{-- css external signup --}}
<link rel="stylesheet" href="beban/public/css/login.css">

@extends('template.gate')
@section('konten')

    <div class="card-body">
        <div class="bungkus shadow">

            <form action="{{ route('gate.signup') }}" method="POST">
                
                {{-- jika ada pesan kesalahan --}}
                @if (session()->has('pesan'))
                    <div class="alert alert-danger text-center"> {{ session()->get('pesan') }} </div>
                @endif
                {{-- jika ada pesan kesalahan --}}
                @if (session()->has('pesansandi'))
                    <div class="alert alert-danger text-center"> {{ session()->get('pesansandi') }} </div>
                @endif

                @csrf

                <h3 class="mb-5 text-center">Daftar</h3>
                <div class="mb-3 mt-3">

                    <label for="nama" class="form-label @error('nama') is-invalid @enderror">Nama Pengguna</label>
                    <br>
                    <input id="nama" type="text" name="nama" autocomplete="off" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <br>

                <div class="mb-3">
                    <label for="myInput" class="form-label @error('password') is-invalid @enderror">Kata Sandi</label>
                    <div class="password">

                        <input id="myInput" type="password" name="password" autocomplete="off"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fa fa-eye"></i>
                            <i id="hide2" class="fa fa-eye-slash"></i>
                        </span>

                    </div>
                </div>

                <br>

                <div class="mb-3">
                    <label for="myInput1" class="form-label @error('confirm') is-invalid @enderror">Konfirmasi
                        Kata
                        Sandi</label>
                    <div class="password">

                        <input id="myInput1" type="password" name="confirm" autocomplete="off"
                            value="{{ old('confirm') }}">
                        @error('confirm')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <span class="eye" onclick="myFunction1()">
                            <i id="hide3" class="fa fa-eye"></i>
                            <i id="hide4" class="fa fa-eye-slash"></i>
                        </span>
                    </div>
                </div>

                <button type="submit" class="daftar btn text-white text-deocration-none">Daftar</button>


                <p class="tx text-center">Sudah memiliki akun? <a href="{{ route('login') }}"
                        class="text-decoration-none text-danger">Masuk</a></p>

                <div class="text-center mt-4">
                    <a href="{{ route('landing') }}" class="text-decoration-none text-dark">
                        <i class="fas fa-home" style="font-size:  1.5rem"></i>
                    </a>
                </div>
            </form>

        </div>
        <!-- End Login -->

    @endsection

    {{-- js external --}}
    <script src="beban/public/js/signup.js"></script>
