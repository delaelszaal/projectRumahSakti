@extends('templates.main')
@section('content')

<div class="row mt-5 mb-3">
    <div class="col-lg-12 margin-tb">
        <div class="col-12 d-flex align-items-center">

            <h2>CRUD DOKTER</h2>
            <a class="btn btn-success ms-auto mx-2" href="{{route('dktr.create')}}">Input Dokter</a>
            <a class="btn btn-success" href="\">Home</a>
        </div>
    </div>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">Id</th>
        <th>ID Dokter</th>
        <th width="20%" class="text-center">Nama Dokter</th>
        <th width="280px" class="text-center">Tanggal Lahir</th>
        <th width="280px" class="text-center">Spesialisasi</th>
        <th width="20%" class="text-center">Action</th>
    </tr>
    @foreach($dktr as $dokter)
    <tr>
        <td class="text-center">{{++$i}}</td>
        <td>{{$dokter->idDokter}}</td>
        <td>{{$dokter->namaDokter}}</td>
        <td>{{$dokter->tanggalLahir}}</td>
        <td>{{$dokter->spesialisasi}}</td>
        <td class="text-center">
            <form action="{{route('dktr.destroy',$dokter->id)}}" method="POST">
                <a class="btn btn-info btn-sm" href="{{route('dktr.show',$dokter->id)}}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{route('dktr.edit',$dokter->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $dktr->links() !!}
@endsection