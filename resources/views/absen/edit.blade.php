@extends('layout.app')
@section('title','EditAbsen')
@section('content')

<div class="row">
  <div class="col-md-8">
      <div class="card card-user">
          <div class="card-header">
              <h5 class="card-title">Edit Absensi</h5>
          </div>
          <div class="card-body">
              <form action="" method="post">
              @csrf
              @method('PUT')
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Tanggal Absensi</label>
                              <input type="text" class="form-control" placeholder=""
                                  name="nim" value="">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Jam Masuk</label>
                              <input type="text" class="form-control" placeholder=""
                                  name="name" value="">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jam Keluar</label>
                            <input type="text" class="form-control" placeholder=""
                                name="name" value="">
                        </div>
                    </div>
                </div>
                  <div class="row">
                      <div class="update ml-auto mr-auto">
                          <button type="submit" class="btn btn-primary btn-round">Add</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
  
@endsection