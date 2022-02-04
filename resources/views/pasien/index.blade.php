@extends('layouts.main')

@section('container')
<?php 
$no=1;
?>
<h1>Data Wali</h1>
    <a href="/pasien/create" class="btn btn-success"> Create </a>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Hewan</th>
        <th scope="col">Umur Hewan</th>
        <th scope="col">Jenis Hewan</th>
        <th scope="col">Ras Hewan</th>
        <th scope="col">Nama Wali</th>
        <th scope="col">Aksi</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $pasien)
            <tr>
            <td>{{$no++}}</td>
            <td>{{$pasien->nama_hewan}}</td>
            <td>{{$pasien->umur_hewan}}</td>
            <td>{{$pasien->jenis_hewan}}</td>
            <td>{{$pasien->ras_hewan}}</td>
            <td>{{$pasien->nama_wali}}</td>
            <td>
                <a href="/pasien/{{$pasien->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="/pasien/delete" class="btn btn-danger"><span data-feather="edit">Delete</span></a>
            </td>
            </tr>
        @endforeach

  </tbody>
</table>
    <a href="/home">Back to Home</a>
@endsection