@extends('layouts.main')

@section('container')
@auth
<h1 class="text-black text-center">Guru</h1>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data Guru
</button>

<form class="d-flex mt-2" action="/guru" method="GET">
    <input name="find" class="form-control me-2" type="search" placeholder="Cari Nama" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Guru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/guru" method="POST" class="row row-cols-1 row-cols-xl-1 g-3">
                @csrf
                <div class="col-12">
                    <input type="text" name="nama" placeholder="Nama" class="form-control" require autofocus>
                </div>
                <div class="col-12">
                    <input type="text" name="mapel" placeholder="Mata Pelajaran" class="form-control" require>
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
                    <input type="number" name="no_telepon" placeholder="Nomor Telepon" class="form-control" require>
                </div>
                <div class="col-12">
                    <textarea class="form-control" name="jadwal" cols="60" rows="2" placeholder="Jadwal..."></textarea>
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
            <th class="align-middle">Guru</th>
            <th class="align-middle">Mata Pelajaran</th>
            <th class="align-middle">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $n = 1 
        @endphp
        @foreach ($teachers_data as $teachers)
        <tr>
            <td class="align-middle">{{ $n }}</td>
            <td class="align-middle">{{ $teachers->nama }}</td>
            <td class="align-middle">{{ $teachers->mapel }}</td>
            <td class="align-middle">
                <a href="/guru/{{ $teachers->id }}" class="btn btn-info">Peek</a>
                <a href="/guru/{{ $teachers->id }}/update" class="btn btn-primary">Update</a>
                <a href="/guru/{{ $teachers->id }}/delete" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data?')">Delete</a>
            </td>
        </tr>
        @php
        $n++
        @endphp
        @endforeach
    </tbody>
</table>

{{ $teachers_data->links() }}
@else 
<h1 class="text-black text-center">Guru</h1>

<form class="d-flex mt-2" action="/guru" method="GET">
    <input name="find" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>


<table class="table table-success table-striped text-center mt-2">
    <thead>
        <tr>
            <th class="align-middle">No</th>
            <th class="align-middle">Guru</th>
            <th class="align-middle">Mata Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        @php
        $n = 1 
        @endphp
        @foreach($teachers_data as $teachers)
        <tr>
            <td class="align-middle">{{ $n }}</td>
            <td class="align-middle">{{ $teachers->nama }}</td>
            <td class="align-middle">{{ $teachers->mapel }}</td>
        </tr>
        @php
        $n++
        @endphp
        @endforeach
    </tbody>
</table>

{{ $teachers_data->links() }}
@endauth
    
@endsection