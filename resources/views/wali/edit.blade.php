@extends('layouts.main')

@section('container')

<h1>Edit Wali</h1>  
    <form method="post" action="{{route('wali.update',$wali->id)}}">
    @csrf
    @method('put')
        <div class="form-group">
            <label for="name">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali" value="{{$wali->nama_wali}}">
        </div>
        <div class="form-group">
            <label for="name">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$wali->alamat}}">
        </div>
        <div class="form-group">
            <label for="name">No. Telepon</label>
            <input type="text" class="form-control" name="notelepon" value="{{$wali->notelepon}}">
        </div>
        <div class="form-group">
            <label for="name">Nama Hewan</label>
            <input type="text" class="form-control" name="nama_hewan" value="{{$wali->nama_hewan}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
</form>
@stop