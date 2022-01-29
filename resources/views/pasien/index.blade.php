@extends('layouts.main')

@section('container')

    <h1>Data Pasien</h1>
    <a href="/pasien/create" class="btn btn-success">Tambah Data</a>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pemilik</th>
        <th scope="col">Nama Hewan</th>
        <th scope="col">Jenis Hewan</th>
        <th scope="col">Diagnosa</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $pasien)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$pasien->namapemilik}}</td>
        <td>{{$pasien->namahewan}}</td>
        <td>{{$pasien->jenishewan}}</td>
        <td>{{$pasien->diagnosa}}</td>
        <td>
            <a href="{{route('pasien.edit', $pasien->id)}}" class="btn btn-warning">Ubah</a>
        </td>
        <form action="{{route('pasien.destroy', $pasien->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </tr>
        @endforeach
    </tbody>
    </table>
    @stop
    <a href="/home">Back to Home</a>
@endsection