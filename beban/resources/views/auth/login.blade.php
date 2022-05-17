{{-- css external login --}}
<link rel="stylesheet" href="beban/public/css/login.css">

@extends('template.gate')

@section('konten')
    <div class="card-body">
        <div class="bungkus shadow rounded-lg">

            {{-- pesan jika regostrasi berhasil --}}
            @if (session()->has('pesan'))
                <div class="alert alert-success text-center"> {{ session()->get('pesan') }} </div>
            @endif

            {{-- pesan jika sandi salah --}}
            @if (session()->has('pesansandi'))
                <div class="alert alert-danger text-center"> {{ session()->get('pesansandi') }} </div>
            @endif

            {{-- pesan jika username salah --}}
            @if (session()->has('pesannama'))
                <div class="alert alert-danger text-center"> {{ session()->get('pesannama') }}</div>

            @endif

            {{-- pesan jika user memaksa masuk ke index tanpa login --}}
            @if (session()->has('pesansession'))
                <div class="alert alert-danger text-center">{{ session()->get('pesansession') }}</div>
            @endif

            <form action="{{ route('gate.login') }}" method="POST">
                @csrf

                <h3 class="mb-5 text-center">Masuk</h3>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label  @error('nama') is-invalid @enderror">Nama Pengguna</label>
                    <br>
                    <input type="text" name="nama" autocomplete="off" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="pwd" class="form-label @error('password') @enderror">Kata Sandi</label>
                    <div class="password">
                        <input id="myInput" type="password" name="password" autocomplete="off" value="{{ old('password') }}">
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fa fa-eye"></i>
                            <i id="hide2" class="fa fa-eye-slash"></i>
                        </span>
                    </div>

                </div>

                <button type="submit" class="daftar btn text-white">Masuk</button>

                <p class="tx text-center">Belum memiliki akun? <a href="{{ route('signup') }}"
                        class="text-decoration-none text-danger">Daftar</a></p>

                <div class="text-center mt-5">
                    <a href="{{ route('landing') }}" class="text-decoration-none text-dark">
                        <i class="fas fa-home" style="font-size:  1.5rem"></i>
                    </a>
                </div>
            </form>
        </div>

    </div>
    <!-- End Login -->
@endsection
{{-- js external --}}
<script src="beban/public/js/login.js"></script>
