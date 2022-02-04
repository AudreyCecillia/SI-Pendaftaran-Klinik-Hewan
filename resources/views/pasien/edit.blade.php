@extends('layouts.main')

@section('container')

<h1>Edit Wali</h1>  
    <form method="post" action="{{route('pasien.update',$pasien->id)}}">
    @csrf
    @method('put')
        <div class="form-group">
            <label for="name">Nama Hewan</label>
            <input type="text" class="form-control" name="nama_hewan" value="{{$pasien->nama_hewan}}">
        </div>
        <div class="form-group">
            <label for="name">Umur Hewan</label>
            <input type="text" class="form-control" name="umur_hewan" value="{{$pasien->umur_hewan}}">
        </div>
        <div class="form-group">
            <label for="name">Jenis Hewan</label>
            <input type="text" class="form-control" name="jenis_hewan" value="{{$pasien->jenis_hewan}}">
        </div>
        <div class="form-group">
            <label for="name">Ras Hewan</label>
            <input type="text" class="form-control" name="ras_hewan" value="{{$pasien->ras_hewan}}">
        </div>
        <div class="form-group">
            <label for="name">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali" value="{{$pasien->nama_wali}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
</form>
@stop