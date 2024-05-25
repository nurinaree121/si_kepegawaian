@extends('layout.app')
@section('title', 'Create Jabatan')
@section('content')

<form method="POST" action="{{ route('storejabatan') }}" enctype="multipart/form-data">
    @csrf {{-- validasi agar tdk terulang kembali --}}
    <div class="mb-3">
        <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
        <input type="text" name="nama_jabatan" class="form-control @error('nama_jabatan') is-invalid @enderror" value="{{ old('nama_jabatan') }}">
        {{-- menampilkan pesan error --}} 
        @error('nama_jabatan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="golongan" class="form-label">Golongan</label>
        <input type="text" name="golongan" class="form-control @error('golongan') is-invalid @enderror" value="{{ old('golongan') }}">
        {{-- menampilkan pesan error --}}
        @error('golongan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tunjangan" class="form-label">Tunjangan</label>
        <input type="text" name="tunjangan" class="form-control @error('tunjangan') is-invalid @enderror" value="{{ old('tunjangan') }}">
        {{-- menampilkan pesan error --}}
        @error('tunjangan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection