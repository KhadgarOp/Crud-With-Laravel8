@extends('layouts.main')

@section('container')
<div class="container" style="margin-top: 100px;">
    <h1 class="text-black text-center mt-5">{{ $karyawans->nama }}</h1>
    
    <table class="table table-success table-striped text-center mt-5">
        <thead>
            <tr>
                <th class="align-middle">No</th>
                <th class="align-middle">Guru</th>
                <th class="align-middle">Pekerjaan</th>
                <th class="align-middle">Jenis Kelamin</th>
                <th class="align-middle">Agama</th>
                <th class="align-middle">Telepon</th>
                <th class="align-middle">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php
            $n = 1 
            @endphp
            <tr>
                <td class="align-middle">{{ $n }}</td>
                <td class="align-middle">{{ $karyawans->nama }}</td>
                <td class="align-middle">{{ $karyawans->pekerjaan }}</td>
                <td class="align-middle">{{ $karyawans->jenis_kelamin }}</td>
                <td class="align-middle">{{ $karyawans->agama }}</td>
                <td class="align-middle">{{ $karyawans->no_telepon }}</td>
                <td class="align-middle">{{ $karyawans->alamat }}</td>
            </tr>
            @php
            $n++
            @endphp
        </tbody>
    </table>
</div>
@endsection