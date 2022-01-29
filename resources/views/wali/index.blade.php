@extends('layouts.main')

@section('container')

<h1>Data Wali</h1>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Wali</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Telepon</th>
        <th scope="col">Nama Hewan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($walis as $wali)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$wali->nama_pemilik}}</td>
            <td>{{$wali->alamat_pemilik}}</td>
            <td>{{$wali->notelepon}}</td>
            <td>{{$wali->nama_hewan}}</td>
            <td>
                <a href="/wali/edit" class="badge bg-danger">Edit</a>
                <a href="/wali/delete" class="badge bg-warning"><span data-feather="edit">Delete</span></a>
            </td>
            </tr>
        @endforeach
    @stop
  </tbody>
</table>
    <a href="/home">Back to Home</a>
@endsection