@extends('admin.layout.index')
@section('film', 'active')
@section('konten')

    <style>
        #cari {
            width: 294px;
            padding: 0 10px;
            border-radius: 2px;
            border: 1px solid #aaa;
        }

        #cari:focus {
            border: 0;
            outline: 2px solid #4e73df;
        }

        .card {
            box-shadow: 2px 4px 15px rgba(0, 0, 0, 10%);
            border-radius: 10px;
        }

        .card:hover {
            box-shadow: 2px 4px 20px rgba(0, 0, 0, 20%);
        }

        .tambah-film,
        .show-film {
        border-radius: 14px;
        box-shadow: 2px 4px 15px rgba(0, 0, 0, 10%);
        }

    </style>
    <div class="container mt-5">
        @if (session()->has('pesan'))
            <div class="alert alert-success text-center">{{ session()->get('pesan') }}</div>
        @endif
        <!-- form tambah film -->
        <div class="tambah-film bg-white p-4">
            <h3 class="mb-5">Tambah Film</h3>
            <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="judul" class="@error('judul') is-invalid @enderror">Judul Film</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" id="judul"
                        autocomplete="off" placeholder="ex : Avengers : Infinity Wars">
                    @error('judul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="durasi" class="@error('durasi') is-invalid @enderror">Durasi Film</label>
                    <input type="text" name="durasi" class="form-control" value="{{ old('durasi') }}" id="durasi"
                        autocomplete="off" placeholder="ex : 2j 3m">
                    @error('durasi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <textarea class="mb-3 @error('nama') is-invalid @enderror" name="sinopsis" id="mytextarea"
                    placeholder="Tulis sinopsis disini">{{ old('sinopsis') }}</textarea>
                <div class="form-group mb-3 mt-3">
                    <label for="cover" class="@error('cover') is-invalid @enderror">Cover Film</label>
                    <input type="file" name="cover" class="form-control-file" id="cover">
                    @error('cover')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label class="@error('video') is-invalid @enderror" for="video">Video</label>
                    <input type="file" name="video" class="form-control-file" id="video">
                    @error('video')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success p-2" style="width: 100%">
                    Simpan
                </button>
            </form>
        </div>
        <!-- form tambah film -->


        <!-- menampilkan film -->
        <div class="show-film bg-white p-4 mt-5">
            <div class="head d-flex justify-content-between mt-4">
                <h3>Daftar Film</h3>

                <!-- form cari film -->
                <div class="form-cari d-flex justify-content-end align-items-center">
                    <form action="{{ route('film.cari') }}" method="POST">
                        @csrf
                        <div class="cari d-flex">
                            <input type="text" name="keyword" placeholder="cari judul film" id="cari">
                            <button class="btn btn-primary ml-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="film my-5">
                <div class="row">
                    @forelse ($films as $film)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card my-4" style="width: 18rem">
                                <img src="beban/storage/app/{{ $film['cover'] }}" class="card-img-top" alt="Cover">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $film['judul'] }}</h5>
                                    <p class="card-text text-mute">{{ $film['durasi'] }}</p>
                                    <div class="tombol d-flex justify-content-end">

                                        <a href="{{route('film.show', ['id'=>$film['id']])}}" class="btn btn-success">Lihat</a>

                                        <a href="{{ route('film.edit', ['id' => $film['id']]) }}" class="btn btn-primary mx-2">Edit</a>
                                        
                                        <form action="{{ url('/film/' . $film['id']) }}" method="POST">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger text-center p-2" style="width: 100%">Data film kosong</div>
                    @endforelse
                </div>
            </div>
            <!-- menampilkan film -->
        </div>
    @endsection
