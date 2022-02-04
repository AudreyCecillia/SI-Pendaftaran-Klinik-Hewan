@extends('layouts.main')

<?php $no=1?>
@section('container')
  <h3>Data Makanan</h3>
  <a href="{{route('wali.create')}}" class="btn btn-success">Tambah Data</a>
  <br>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama Makanan</th>
          <th>Harga Makanan</th>
          <th>Total Pembelian</th>
          <th>Total Harga</th>
          <th>Aksi</th>
          <th></th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($walis as $wali)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$wali->nama_wali}}</td>
              <td>{{$wali->alamat}}</td>
              <td>{{$wali->notelepon}}</td>
              <td>{{$wali->nama_hewan}}</td>
              <td>
                <a href="{{route('wali.edit',$wali->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('wali.destroy',$wali->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop