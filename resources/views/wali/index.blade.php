@extends('layouts.main')

@section('container')

    <h1>Data Wali</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Wali</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Telepon</th>
        <th scope="col">Nama Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$datas->nama_pemilik}}</td>
        <td>{{$datas->alamat_pemilik}}</td>
        <td>{{$datas->notelepon}}</td>
        <td>{{$datas->nama_hewan}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @stop
    <a href="/home">Back to Home</a>
@endsection