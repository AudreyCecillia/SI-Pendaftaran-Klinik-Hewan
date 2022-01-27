@extends('layouts.main')

@section('container')

    <h1>Data Pasien</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pemilik</th>
        <th scope="col">Nama Hewan</th>
        <th scope="col">Umur Hewan</th>
        <th scope="col">Nama Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $datas)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$datas->namapemilik}}</td>
        <td>{{$datas->alamatpemilik}}</td>
        <td>{{$datas->notelepon}}</td>
        <td>{{$datas->namahewan}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @stop
    <a href="/home">Back to Home</a>
@endsection