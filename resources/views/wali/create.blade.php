@extends('layouts.main')

@section('container')

<h1>Tambah Data</h1>  
    <form method="post" action="{{route('wali.store')}}">
    @csrf
        <div class="form-group">
            <label for="name">Nama Pemilik</label>
            <input type="text" class="form-control" name="nama_wali">
        </div>
        <div class="form-group">
            <label for="name">Alamat</label>
            <input type="text" class="form-control" name="alamat" >
        </div>
        <div class="form-group">
            <label for="name">No. Telepon</label>
            <input type="text" class="form-control" name="notelepon" >
        </div>
        <div class="form-group">
            <label for="name">Nama Hewan</label>
            <input type="text" class="form-control" name="nama_hewan" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
</form>
@stop