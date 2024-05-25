@extends('layout.app')
@section('title', 'Create Absen')
@section('content')

<form method="POST" action="{{ route('storeabsen') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
        @error('tanggal')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jam_masuk" class="form-label">Jam Masuk</label>
        <input type="text" name="jam_masuk" class="form-control @error('jam_masuk') is-invalid @enderror" value="{{ old('jam_masuk') }}">
        @error('jam_masuk')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jam_keluar" class="form-label">Jam Keluar</label>
        <input type="text" name="jam_keluar" class="form-control @error('jam_keluar') is-invalid @enderror" value="{{ old('jam_keluar') }}">
        @error('jam_keluar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jam_keluar" class="form-label">id Pegawai</label>
        <input type="text" name="jam_keluar" class="form-control @error('jam_keluar') is-invalid @enderror" value="{{ old('jam_keluar') }}">
        @error('jam_keluar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection