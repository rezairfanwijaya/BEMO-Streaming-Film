@extends('admin.layout.index')
@section('dashboard', 'active')
@section('konten')

    <style>
        .card {
            box-shadow: 2px 4px 15px rgba(0, 0, 0, 10%);
        }

        .card:hover {
            box-shadow: 2px 4px 20px rgba(0, 0, 0, 20%);
        }

        .data {
            border-radius: 10px;
        }

        .head {
            border-radius: 10px 10px 0 0;
        }

    </style>
    <div class="container">
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('film.index') }}" class="text-decoration-none">
                    <div class="card border-left-primary h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Film</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $TotalFilm }} Film</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-film" aria-hidden="true" style="font-size: 2rem;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.pengguna') }}" class="text-decoration-none">
                    <div class="card border-left-success h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Pengguna</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $TotalUser }} Pengguna</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users" aria-hidden="true" style="font-size: 2rem;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        {{-- film summary --}}
        <div class="film data bg-white shadow-sm mt-5">

            <div class="head bg-primary text-white p-2 mb-3">
                <div class="" style="font-size: 1.4rem">Data Film</div>
            </div>

            {{-- jika tidak ada data film maka tampilkan pesan data kosong --}}
            @if ($TotalFilm === 0)
                <div class="alert alert-danger text-center">Data Film Kosong</div>
            @else
                {{-- jika ada data film maka tampilkan --}}
                <div class="table-responsive p-3">
                    <table class="table table-bordered text-center">

                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Durasi</th>
                            <th>Cover</th>
                        </tr>



                        @foreach ($films as $film)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $film['judul'] }}</td>
                                <td>{{ $film['durasi'] }}</td>
                                <td>
                                    <img src="beban/storage/app/{{ $film['cover'] }}" alt="cover" style="width: 90px">
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <p class="d-flex justify-content-end">Total Film : {{ $TotalFilm }}</p>
                </div>
            @endif
        </div>
        {{-- film summary --}}


        {{-- user summary --}}
        <div class="film data bg-white  my-5 shadow-sm">
            <div class="head bg-success text-white p-2 mb-3">
                <div class="" style="font-size: 1.4rem">Data Pengguna</div>
            </div>

            {{-- jika tidak ada data film maka tampilkan pesan data kosong --}}
            @if ($TotalUser === 0)
                <div class="alert alert-danger text-center">Data Pengguna Kosong</div>
            @else
                {{-- jika ada data film maka tampilkan --}}
                <div class="table-responsive p-3">
                    <table class="table table-bordered text-center ">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Password</th>
                        </tr>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user['nama'] }}</td>
                                <td>{{ $user['password'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <p class="d-flex justify-content-end">Total Pengguna : {{ $TotalUser }}</p>
                </div>
            @endif
        </div>
        {{-- user summary --}}

    </div>
@endsection
