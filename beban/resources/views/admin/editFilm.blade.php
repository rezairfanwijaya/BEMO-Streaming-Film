@extends('admin.layout.index')
@section('film', 'active')

@section('konten')
    <style>
        .edit-film {
            border-radius: 14px;
            box-shadow: 2px 4px 15px rgba(0, 0, 0, 10%);
        }

    </style>
    <!-- form tambah film -->
    <div class="edit-film bg-white p-4 my-5">
        <h3 class="mb-5">Edit Film</h3>
        <form action="{{ route('film.update',['film'=>$film->id]) }}" enctype="multipart/form-data" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group mb-3">
                <label for="judul" class="@error('judul') is-invalid @enderror">Judul Film</label>
                <input type="text" name="judul" class="form-control" value="{{ $film['judul'] }}" id="judul"autocomplete="off" placeholder="ex : Avengers : Infinity Wars">
                @error('judul')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="durasi" class="@error('durasi') is-invalid @enderror">Durasi Film</label>
                <input type="text" name="durasi" class="form-control" value="{{ $film['durasi'] }}" id="durasi"
                    autocomplete="off" placeholder="ex : 2j 3m">
                @error('durasi')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <textarea class="mb-3 @error('nama') is-invalid @enderror" name="sinopsis" id="mytextarea"
                placeholder="Tulis sinopsis disini">{{ $film['sinopsis'] }}</textarea>

            <div class="form-group mb-3 mt-3">
                <label for="cover" class="@error('cover') is-invalid @enderror">Cover Film</label>
                <br>
                <img src="{{ url('beban/storage/app') }}/{{ $film['cover'] }}" alt="cover" width="40%"
                    class="mb-2">

                <input type="file" name="cover" class="form-control-file" id="cover">
                @error('cover')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-5">
                <label class="@error('video') is-invalid @enderror" for="video">Video</label>
                <br>
                <video controls style="width: 100%">
                    <source src="{{ url('beban/storage/app') }}/{{ $film['video'] }}">
                </video>
                <input type="file" name="video" class="form-control-file" id="video">
                @error('video')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <a href="{{ route('film.index') }}" class="btn btn-secondary p-2" style="width: 10%">Batal</a>

            
                <button type="submit" class="btn btn-success p-2 ml-2" style="width: 15%">
                    Simpan
                </button>
            

        </form>
    </div>
    <!-- form tambah film -->
@endsection
