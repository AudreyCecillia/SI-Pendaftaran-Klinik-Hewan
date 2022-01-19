@extends('layouts.main')

@section('container')

    <h1>Data Pasien</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pemilik</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Telepon</th>
        <th scope="col">Nama Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->namapemilik}}</td>
        <td>{{$data->alamatpemilik}}</td>
        <td>{{$data->notelepon}}</td>
        <td>{{$data->namahewan}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @stop
    <a href="/home">Back to Home</a>
@endsection