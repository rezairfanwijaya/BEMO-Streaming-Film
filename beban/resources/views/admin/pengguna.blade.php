@extends('admin.layout.index')
@section('pengguna', 'active')
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

    </style>


    <div class="container">
        @if (session()->has('pesan'))
            <div class="alert alert-success text-center">{{ session()->get('pesan') }}</div>
        @endif
        <div class="table p-4 bg-white mt-5 shadow rounded">
            <div class="head d-flex justify-content-between">
                <h3>Data Pengguna</h3>
                <!-- form cari pengguna -->
                <div class="form-cari d-flex justify-content-end align-items-center mb-4">
                    <form action="{{ route('admin.cari.pengguna') }}" method="POST">
                        @csrf
                        <div class="cari d-flex">
                            <input type="text" name="keyword" placeholder="cari nama pengguna" id="cari">
                            <button class="btn btn-primary ml-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <!-- form cari pengguna -->
            </div>
            {{-- jika user tidak ada --}}
            @if ($total === 0)
                <div class="alert alert-success text-center ">Data Pengguna Kosong</div>
                {{-- jika ada --}}
            @else
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Password</th>
                            <th scope="col">Tanggal Bergabung</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user['nama'] }}</td>
                                <td>{{ $user['password'] }}</td>
                                <td>{{ $user['created_at'] }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy', ['pengguna' => $user['id']]) }}"
                                        method="POST">
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection
