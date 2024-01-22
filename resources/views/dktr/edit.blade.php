@extends('template')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Dokter</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{route('dktr.index')}}">Back</a>
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
<form action="{{route('dktr.update',$dktr->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Dokter: </strong>
                <input type="text" name="idDokter" class="form-control" placeholder="ID DOKTER" value="{{$dktr->idDokter}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dokter: </strong>
                <input value="{{$dktr->namaDokter}}" type="text" name="namaDokter" class="form-control" placeholder="NAMA DOKTER">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tangal Lahir: </strong>
                <input value="{{$dktr->tanggalLahir}}" type="date" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spesialisasi: </strong>
                <select class="form-control" name="spesialisasi" id="">
                    <option value="{{$dktr->spesialisasi}}">{{$dktr->spesialisasi}}</option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Anak">Poli Anak</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <option value="Poli Mata">Poli Mata</option>
                    <option value="Poli Kulit">Poli Kulit</option>
                    <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                    <option value="Poli Konseling">Poli Konseling</option>
                    <option value="Poli Saraf">Poli Saraf</option>
                    <option value="Poli THT">Poli THT</option>
                    <option value="Poli Bedah">Poli Bedah</option>
                    <option value="Poli Paru">Poli Paru</option>
                    <option value="Poli Jantung">Poli Jantung</option>
                    <option value="Poli Gizi Klinik">Poli Gizi Klinik</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi Praktik: </strong>
                <!-- <strong>Ruangan: </strong> -->
                <select name="lokasiPraktik" class="form-control" id="">
                    <!-- <option value="{{ $dktr->lokasiPraktik }}">{{ $dktr->lokasiPraktik }}</option> -->
                    @foreach($ruangan as $item)
                    <option value="{{ $item->namaRuangan }}" {{ $item->namaRuangan == $dktr->lokasiPraktik ? 'selected' : '' }}>{{ $item->namaRuangan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jam Praktik: </strong>
                <input type="time" class="form-control" name="jamPraktik" value="{{$dktr->jamPraktik}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection