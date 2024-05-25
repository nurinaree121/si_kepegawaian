@extends('layout.app')
@section('title','absen')
@section('content')

<div class="row">
  <div class="col-md-10">
      <h3>Absen</h3>
  </div>
  <div class="col-sm-2">
      <a class="btn btn-success" href="{{ route('createabsen', ['id' => 1]) }}">Tambah</a>
      {{-- <a class="btn btn-primary" href="{{ route('absen.pdf') }}" target="_blank">Cetak PDF</a> --}}
  </div>
  {{-- <div class="col-sm-2">
      <a class="btn btn-primary" href="{{ route('jabatan.pdf') }}" target="_blank">Cetak PDF</a>
  </div> --}}
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
          <th width="40px"><b>Tanggal</b></th>
          <th width="180px">Jam Masuk</th>
          <th width="100px">Jam Keluar</th>
          <th width="210px">Action</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($absens as $absen)
          <tr>
              <td>{{ $absen->tanggal }}</td>
              <td>{{ $absen->jam_masuk}}</td>
              <td>{{ $absen->jam_keluar }}</td>
              <td>{{ $absen->id_pegawai }}</td>
              <td>
                  <a href="{{route('absenedit', ['id' => $absen->id])}}"
                      class="btn btn-secondary btn-sm text-capitalize">Edit</a>
                  <form action="{{route('destroyabsen', ['id' => $absen->id])}}" method="Post"style="display:inline;" >
                      @csrf
                      @method('delete')
                      <button type="submit"
                          class="btn btn-danger btn-sm text-capitalize">Delete</button>
                  </form>
                  {{-- <form action="#" method="post">
                      <a class="btn btn-sm btn-warning" href="{{ route('jabatanedit', ['id' => $jabatan->id]) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                  </form> --}}
              </td>
          </tr>
      @endforeach
  </tbody>
</table>

@endsection