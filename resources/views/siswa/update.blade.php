@extends('layouts.form')

@section('container')
<div class="container-fluid border border-dark rounded text-center bg-light mt-5" style="max-width: 600px; margin-bottom: 50px; padding: 30px;">
    <h1 class="text-dark pb-2">Update Data</h1>
    <form action="/siswa/{{ $students->id }}/submit" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
        @csrf
        <div class="col-12">
            <input type="text" name="nama" placeholder="Nama" class="form-control" require autofocus value="{{ $students->nama }}">
        </div>
        <div class="col-12">
            <select class="form-select" name="kelas" aria-label="Select">
                <option selected disabled hidden>Kelas</option>
                <option value="10 RPL 1" @if ($students->kelas == '10 RPL 1') selected @endif>10 RPL 1</option>
                <option value="10 RPL 2" @if ($students->kelas == '10 RPL 2') selected @endif>10 RPL 2</option>
                <option value="11 Random Major 1" @if ($students->kelas == '11 Random Major 1') selected @endif>11 Random Major 1</option>
                <option value="11 Random Major 2" @if ($students->kelas == '11 Random Major 2') selected @endif>11 Random Major 2</option>
                <option value="12 Random Major 1" @if ($students->kelas == '12 Random Major 1') selected @endif>12 Random Major 1</option>
                <option value="12 Random Major 2" @if ($students->kelas == '12 Random Major 2') selected @endif>12 Random Major 2</option>
              </select>
        </div>
        <div class="col-12">
            <select class="form-select" name="jenis_kelamin" aria-label="Select">
                <option selected disabled hidden>Jenis Kelamin</option>
                <option value="Laki-Laki" @if ($students->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if ($students->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="col-12">
            <select class="form-select" name="agama" aria-label="Select">
                <option selected disabled hidden>Agama</option>
                <option value="Islam" @if ($students->agama == 'Islam') selected @endif>Islam</option>
                <option value="Kristen" @if ($students->agama == 'Kristen') selected @endif>Kristen</option>
                <option value="Hindu" @if ($students->agama == 'Hindu') selected @endif>Hindu</option>
                <option value="Buddha" @if ($students->agama == 'Buddha') selected @endif>Buddha</option>
                <option value="Konghucu" @if ($students->agama == 'Konghucu') selected @endif>Konghucu</option>
            </select>
        </div>
        <div class="col-12">
            <select class="form-select" name="saudara" aria-label="Select">
                <option selected disabled hidden>Saudara</option>
                <option value="0" @if ($students->saudara == '0') selected @endif>0</option>
                <option value="1" @if ($students->saudara == '1') selected @endif>1</option>
                <option value="2" @if ($students->saudara == '2') selected @endif>2</option>
                <option value="3" @if ($students->saudara == '3') selected @endif>3</option>
                <option value="4" @if ($students->saudara == '4') selected @endif>4</option>
                <option value="5+" @if ($students->saudara == '5+') selected @endif>5+</option>
            </select>
        </div>
        <div class="col-12">
            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" require value="{{ $students->tanggal_lahir }}">
        </div>
        <div class="col-12">
            <input type="number" name="no_telepon" placeholder="Nomor Telepon" class="form-control" require value="{{ $students->no_telepon }}">
        </div>
        <div class="col-12">
            <input type="number" name="nisn" placeholder="NISN" class="form-control" require value="{{ $students->nisn }}">
        </div>
        <div class="col-12">
            <input type="number" name="nis" placeholder="NIS" class="form-control" require value="{{ $students->nis }}">
        </div>
        <div class="col-12">
            <textarea class="form-control" name="alamat" cols="60" rows="2" placeholder="Alamat...">{{ $students->alamat }}</textarea>
        </div>
        <div class="col-12 d-grid gap-2 mx-auto">
            <button class="btn btn-success" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div
@endsection