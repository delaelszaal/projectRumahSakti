@extends('templates.main')
@section('content')

<div class="row mt-5 mb-3">
    <div class="col-lg-12 margin-tb d-flex align-items-center ">
        <h2>CRUD RUANGAN</h2>
        <a class="btn btn-success ms-auto mx-2" href="{{route('ruangan.create')}}">Input Ruangan</a>
        <a class="btn btn-success " href="\">Home</a>
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
        <th>Kode Ruangan</th>
        <th width="20%" class="text-center">Nama Ruangan</th>
        <th width="280px" class="text-center">Daya Tampung</th>
        <th width="280px" class="text-center">Lokasi</th>
        <th width="20%" class="text-center">Action</th>
    </tr>
    @foreach($ruangan as $rgn)
    <tr>
        <td class="text-center">{{++$i}}</td>
        <td>{{$rgn->kodeRuangan}}</td>
        <td>{{$rgn->namaRuangan}}</td>
        <td>{{$rgn->dayaTampung}}</td>
        <td>{{$rgn->lokasi}}</td>
        <td class="text-center">
            <form action="{{route('ruangan.destroy',$rgn->id)}}" method="POST">
                <a class="btn btn-info btn-sm" href="{{route('ruangan.show',$rgn->id)}}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{route('ruangan.edit',$rgn->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $ruangan->links() !!}
@endsection