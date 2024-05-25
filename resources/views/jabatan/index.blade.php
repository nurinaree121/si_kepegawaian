@extends('layout.app')
@section('title', 'Jabatan')
@section('content')

<div class="row">
    <div class="col-md-10">
        <h3>Jabatan</h3>
    </div>
    <div class="col-sm-2">
        <a class="btn btn-success" href="{{ route('createjabatan', ['id' => 1]) }}">Tambah</a>
    </div>
    <div class="col-sm-2">
        <a class="btn btn-primary" href="{{ route('jabatan.pdf') }}" target="_blank">Cetak PDF</a>
    </div>
</div>
<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('delete'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th width="40px"><b>Nama Jabatan</b></th>
            <th width="180px">Golongan</th>
            <th width="100px">Tunjangan</th>
            <th width="210px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jabatans as $jabatan)
            <tr>
                <td>{{ $jabatan->nama_jabatan }}</td>
                <td>{{ $jabatan->golongan }}</td>
                <td>{{ $jabatan->tunjangan }}</td>
                <td>
                    <a href="{{route('jabatanedit', ['id' => $jabatan->id])}}"
                        class="btn btn-secondary btn-sm text-capitalize">Edit</a>
                    <form action="{{route('destroyjabatan', ['id' => $jabatan->id])}}" method="Post"style="display:inline;" >
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="btn btn-danger btn-sm text-capitalize">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection