@extends('layouts.form')

@section('container')
<div class="container-fluid border border-dark rounded text-center bg-light mt-5" style="max-width: 600px; padding: 30px;">
    <h1 class="text-dark pb-2">Update Data</h1>
    <form action="/karyawan/{{ $karyawans->id }}/submit" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
        @csrf
        <div class="col-12">
            <input type="text" name="nama" placeholder="Nama" class="form-control" require autofocus value="{{ $karyawans->nama }}">
        </div>
        <div class="col-12">
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" require value="{{ $karyawans->pekerjaan }}">
        </div>
        <div class="col-12">
            <select class="form-select" name="jenis_kelamin" aria-label="Select">
                <option selected disabled hidden>Jenis Kelamin</option>
                <option value="Laki-Laki" @if ( $karyawans->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if ( $karyawans->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="col-12">
            <select class="form-select" name="agama" aria-label="Select">
                <option selected disabled hidden>Agama</option>
                <option value="Islam" @if ( $karyawans->agama == 'Islam' ) selected @endif>Islam</option>
                <option value="Kristen" @if ( $karyawans->agama == 'Kristen' ) selected @endif>Kristen</option>
                <option value="Hindu" @if ( $karyawans->agama == 'Hindu' ) selected @endif>Hindu</option>
                <option value="Buddha" @if ( $karyawans->agama == 'Buddha' ) selected @endif>Buddha</option>
                <option value="Konghucu" @if ( $karyawans->agama == 'Konghucu' ) selected @endif>Konghucu</option>
            </select>
        </div>
        <div class="col-12">
            <input type="number" name="no_telepon" placeholder="Nomor Telepon" class="form-control" require value="{{ $karyawans->no_telepon }}">
        </div>
        <div class="col-12">
            <textarea class="form-control" name="alamat" cols="60" rows="2" placeholder="Alamat...">{{ $karyawans->alamat }}</textarea>
        </div>
        <div class="col-12 d-grid gap-2 mx-auto">
            <button class="btn btn-success" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection