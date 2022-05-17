@extends('admin.layout.index')
@section('film', 'active')
@section('konten')

    <div class="container">
        <div class="main bg-white p-4 my-5 shadow-sm" style="border-radius: 10px">
            {{-- video --}}
            <center>
                <video controls autoplay style="width: 100%">
                    <source src="{{ url('beban/storage/app') }}/{{ $film['video'] }}">
                </video>
            </center>
            {{-- judul film --}}
            <div class="judul my-3">
                <h3>{{ $film['judul'] }}</h3>
            </div>

            <hr>

            {{-- sinopsis --}}
            <div class="sinopsis mt-5">
                <h5 class="mt-2">Sinopsis</h5>
                <div class="text" style="text-align: justify">
                    {!! $film['sinopsis'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection
