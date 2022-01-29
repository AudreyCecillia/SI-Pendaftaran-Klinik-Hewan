@extends('layouts.main')

@section('container')

<h5>Data Pasien</h5>
                <form class="mt-4" action="{{route('pasien.update','$pasien->id'}}">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <label for="namahewan" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="namahewan" value="{{$pasien->namahewan}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="umurhewan" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="umurhewan" value="{{$pasien->umurhewan}}">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis</legend>
                        <div class="col-sm-10">
                            <div class="row mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Kucing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label" for="gridCheck2">
                                        Anjing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Kelinci
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                                    <label class="form-check-label" for="gridCheck2">
                                        Burung
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="rashewan" class="col-sm-2 col-form-label">Ras</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="rashewan" value="{{$pasien->rashewan}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="warnahewan" class="col-sm-2 col-form-label">Warna</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="warnahewan" value="{{$pasien->warnahewan}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

@endsection