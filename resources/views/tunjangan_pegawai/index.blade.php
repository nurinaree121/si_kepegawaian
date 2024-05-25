@extends('layout.app')
@section('title','tunjangan_pegawai')
@section('content')

   
        <div class="row">
            <div class="col-md-10">
                <h3> Tunjangan</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href={{route('createtunjangan', ['id'=>1]) }}> Tambah </a>
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
            <th width="40px">Jml Tunjangan</th>
            <th width="180px">Jml Potongan</th>
            <th width="100px">Tanggal</th>
            <th width="100px">id_pegawai</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
            <tr>
                <td>reno</td>
                <td>12421412</td>
                <td>TI</td>
                <td>TI</td>
                <td>
                    <form action="#" method="post">
                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
    </table>


@endsection