@extends('layout.app')
@section('title', 'Edit Jabatan')
@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Jabatan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('jabatanupdate', $jabatan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Jabatan</label>
                                <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" 
                                       name="nama_jabatan" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}">
                                @error('nama_jabatan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Golongan</label>
                                <input type="text" class="form-control @error('golongan') is-invalid @enderror" 
                                       name="golongan" value="{{ old('golongan', $jabatan->golongan) }}">
                                @error('golongan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tunjangan</label>
                                <input type="text" class="form-control @error('tunjangan') is-invalid @enderror" 
                                       name="tunjangan" value="{{ old('tunjangan', $jabatan->tunjangan) }}">
                                @error('tunjangan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection