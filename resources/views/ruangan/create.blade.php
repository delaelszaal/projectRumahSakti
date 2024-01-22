@extends('templates.main')
@section('content')
<div class="row mt-5 mb-3">
    <div class="col-lg-12 margin-tb ">
        <!-- <div class="float-left"> -->
        <div class="col-12 d-flex align-items-center">
            <h2>Tambah Ruangan Baru</h2>
            <a class="btn btn-secondary ms-auto" href="{{route('ruangan.index')}}">Kembali</a>
        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Input gagal.
    <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('ruangan.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Ruangan: </strong>
                <input type="text" name="kodeRuangan" class="form-control" placeholder="KODE RUANGAN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruangan: </strong>
                <input type="text" name="namaRuangan" class="form-control" placeholder="NAMA RUANGAN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Daya Tampung: </strong>
                <input type="number" name="dayaTampung" class="form-control" placeholder="Daya Tampung">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi: </strong>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan!</button>
        </div>
    </div>
</form>
@endsection