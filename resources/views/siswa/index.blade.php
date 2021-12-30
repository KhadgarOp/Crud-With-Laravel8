@extends('layouts.main')

@section('container')
@auth
<h1 class="text-black text-center">Siswa</h1>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data Siswa
</button>

<form class="d-flex mt-2" action="/siswa" method="GET">
    <input name="find" class="form-control me-2" type="search" placeholder="Cari Nama" aria-label="Cari Nama">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/siswa" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
                @csrf
                <div class="col-12">
                    <input type="text" name="nama" placeholder="Nama" class="form-control" require autofocus>
                </div>
                <div class="col-12">
                    <select class="form-select" name="kelas" aria-label="Select">
                        <option selected disabled hidden>Kelas</option>
                        <option value="10 RPL 1">10 RPL 1</option>
                        <option value="10 RPL 2">10 RPL 2</option>
                        <option value="11 Random Major 1">11 Random Major 1</option>
                        <option value="11 Random Major 2">11 Random Major 2</option>
                        <option value="12 Random Major 1">12 Random Major 1</option>
                        <option value="12 Random Major 2">12 Random Major 2</option>
                      </select>
                </div>
                <div class="col-12">
                    <select class="form-select" name="jenis_kelamin" aria-label="Select">
                        <option selected disabled hidden>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="form-select" name="agama" aria-label="Select">
                        <option selected disabled hidden>Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="form-select" name="saudara" aria-label="Select">
                        <option selected disabled hidden>Saudara</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
                <div class="col-12">
                    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" require>
                </div>
                <div class="col-12">
                    <input type="number" name="no_telepon" placeholder="Nomor Telepon" class="form-control" require>
                </div>
                <div class="col-12">
                    <input type="number" name="nisn" placeholder="NISN" class="form-control" require>
                </div>
                <div class="col-12">
                    <input type="number" name="nis" placeholder="NIS" class="form-control" require>
                </div>
                <div class="col-12">
                    <textarea class="form-control" name="alamat" cols="60" rows="2" placeholder="Alamat..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success" name="submit" type="submit">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>

<table class="table table-success table-striped text-center mt-2">
    <thead>
        <tr>
            <th class="align-middle">No</th>
            <th class="align-middle">Siswa</th>
            <th class="align-middle">Kelas</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $n = 1 
        @endphp
        @foreach ($students_data as $students)
        <tr>
            <td class="align-middle">{{ $n }}</td>
            <td class="align-middle">{{ $students->nama }}</td>
            <td class="align-middle">{{ $students->kelas }}</td>
            <td class="align-middle">
                <a href="/siswa/{{ $students->id }}" class="btn btn-info">Peek</a>
                <a href="/siswa/{{ $students->id }}/update" class="btn btn-primary">Update</a>
                <a href="/siswa/{{ $students->id }}/delete" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')">Delete</a>
            </td>
        </tr>
        @php
        $n++
        @endphp
        @endforeach
    </tbody>
</table>

{{ $students_data->links() }}
@else 
<h1 class="text-black text-center">Siswa</h1>

<form class="d-flex mt-2" action="/siswa" method="GET">
    <input name="find" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>


<table class="table table-success table-striped text-center mt-2">
    <thead>
        <tr>
            <th class="align-middle">No</th>
            <th class="align-middle">Siswa</th>
            <th class="align-middle">Kelas</th>
        </tr>
    </thead>
    <tbody>
        @php
        $n = 1 
        @endphp
        @foreach($students_data as $students)
        <tr>
            <td class="align-middle">{{ $n }}</td>
            <td class="align-middle">{{ $students->nama }}</td>
            <td class="align-middle">{{ $students->kelas }}</td>
        </tr>
        @php
        $n++
        @endphp
        @endforeach
    </tbody>
</table>

{{ $students_data->links() }}
@endauth
@endsection