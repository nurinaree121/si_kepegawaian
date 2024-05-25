@extends('layout.app')
@section('title','pegawai')
@section('content')

   
        <div class="row">
            <div class="col-md-10">
                <h3> Daftar Pegawai</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href={{route('createpegawai', ['id'=>1]) }}> Tambah</a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>Username</b></th>
            <th width="180px">Password</th>
            <th width="100px">NIP</th>
            <th width="100px">Nama</th>
            <th width="100px">Jenis Kelamin</th>
            <th width="100px">foto</th>
            <th width="100px">Agama</th>
            <th width="100px">Pendidikan</th>
            <th width="100px">Status Kepegawaian</th>
            <th width="100px">Alamat</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
            <tr>
                <td>reno</td>
                <td>12421412</td>
                <td align="center">2012</td>
                <td>TI</td>
                <td>TI</td>
                <td>TI</td>
                <td>TI</td>
                <td>TI</td>
                <td>TI</td>
                <td>TI</td>
                <td>
                    <form action="#" method="post">
                    <a class="btn btn-sm btn-warning" href={{route('editpegawai', ['id'=>1]) }}>Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
    </table>


@endsection