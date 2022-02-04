@extends('layouts.main')

@section('container')

<h1>Tambah Data</h1>  
    <form method="post" action="{{route('pasien.store')}}">
    @csrf
        <div class="form-group">
            <label for="name">Nama Hewan</label>
            <input type="text" class="form-control" name="nama_hewan">
        </div>
        <div class="form-group">
            <label for="name">Umur Hewan</label>
            <input type="text" class="form-control" name="umur_hewan" >
        </div>
        <div class="form-group">
            <label for="name">Jenis Hewan</label>
            <input type="text" class="form-control" name="jenis_hewan" >
        </div>
        <div class="form-group">
            <label for="name">Ras Hewan</label>
            <input type="text" class="form-control" name="ras_hewan" >
        </div>
        <div class="form-group">
            <label for="name">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
</form>
@stop