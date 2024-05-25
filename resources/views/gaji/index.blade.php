@extends('layout.app')
@section('title','gaji')
@section('content')

   
        <div class="row">
            <div class="col-md-10">
                <h3> Gaji</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href={{route('creategaji', ['id'=>1]) }}> Tambah </a>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  tambah
              </button> --}}
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
            <th width="40px">Gaji Pokok</th>
            <th width="180px">Golongan</th>
            <th width="100px">id_pegawai</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
            <tr>
                <td>reno</td>
                <td>12421412</td>
                <td>12421412</td>
                <td>
                    <form action="#" method="post">
                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                     
                    {{-- @csrf
                    @method('DELETE') --}}
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
    </table>
    
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


@endsection