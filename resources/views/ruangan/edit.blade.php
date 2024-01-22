@extends('templates.main')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Ruangan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{route('ruangan.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('ruangan.update',$ruangan->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Ruangan: </strong>
                <input type="text" name="kodeRuangan" class="form-control" placeholder="KODE RUANGAN" value="{{$ruangan->kodeRuangan}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruangan: </strong>
                <input value="{{$ruangan->namaRuangan}}" type="text" name="namaRuangan" class="form-control" placeholder="NAMA RUANGAN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Daya Tampung: </strong>
                <input value="{{$ruangan->dayaTampung}}" type="number" name="dayaTampung" class="form-control" placeholder="Daya Tampung">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi: </strong>
                <input value="{{$ruangan->lokasi}}" type="text" name="lokasi" class="form-control" placeholder="Lokasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection