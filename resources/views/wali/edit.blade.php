@extends('layouts.main')

@section('container')

        @if(count($errors) > 0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

<h5>Data Wali</h5>
            <form class="mt-4" method="POST" action="">
                <div class="row mb-3">
                    <label for="namapemilik" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="namapemilik" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamatpemilik" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamatpemilik">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="notelepon" class="col-sm-2 col-form-label">No.Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="notelepon">
                    </div>
                </div>
                <button action="" type="submit" class="btn btn-primary">Save</button>
            </form>

@endsection