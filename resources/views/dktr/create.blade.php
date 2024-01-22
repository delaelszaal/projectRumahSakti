@extends('templates.main')
@section('content')
<div class="row mt-5 mb-3">
    <div class="col-lg-12 margin-tb ">
        <!-- <div class="float-left"> -->
        <div class="col-12 d-flex align-items-center">
            <h2>Tambah Dokter Baru</h2>
            <a class="btn btn-secondary ms-auto" href="{{route('dktr.index')}}">Kembali</a>
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
<div class="row">
    <form action="{{route('dktr.store')}}" method="POST">
        @csrf
        <div class="row" class="my-2">
            <div class="col-xs-12 col-sm-12 col-md-12 my-0">
                <div class="form-group">
                    <strong>ID Dokter: </strong>
                    <input type="text" name="idDokter" class="form-control" placeholder="ID DOKTER">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Dokter: </strong>
                    <input type="text" name="namaDokter" class="form-control" placeholder="NAMA DOKTER">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tangal Lahir: </strong>
                    <input type="date" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Spesialisasi: </strong>
                    <select class="form-control" name="spesialisasi" id="">
                        <option> - Spesialisasi - </option>
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
                    <strong>Ruangan: </strong>
                    <select name="lokasiPraktik" class="form-control" id="">
                        @foreach($ruangan as $item)
                        <option value="{{ $item->namaRuangan}}">{{ $item->namaRuangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jam Praktik: </strong>
                    <input type="time" class="form-control" name="jamPraktik">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3 ">
                <button type="submit" class="btn btn-primary">Simpan!</button>
            </div>
        </div>
    </form>
</div>

@endsection