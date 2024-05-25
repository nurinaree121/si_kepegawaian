@extends('layout.app')
@section('title','CreateIjin')
@section('content')

<form action="" method="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Ijin</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keterangan Ijin</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">id pegawai</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
  
@endsection