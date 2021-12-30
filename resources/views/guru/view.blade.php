@extends('layouts.main')

@section('container')
<div class="container" style="margin-top: 100px;">
    <h1 class="text-black text-center mt-5">{{ $teachers->nama }}</h1>
    
    <table class="table table-success table-striped text-center mt-5">
        <thead>
            <tr>
                <th class="align-middle">No</th>
                <th class="align-middle">Guru</th>
                <th class="align-middle">Mata Pelajaran</th>
                <th class="align-middle">Jenis Kelamin</th>
                <th class="align-middle">Agama</th>
                <th class="align-middle">Telepon</th>
                <th class="align-middle">Jadwal</th>
                <th class="align-middle">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php
            $n = 1 
            @endphp
            <tr>
                <td class="align-middle">{{ $n }}</td>
                <td class="align-middle">{{ $teachers->nama }}</td>
                <td class="align-middle">{{ $teachers->mapel }}</td>
                <td class="align-middle">{{ $teachers->jenis_kelamin }}</td>
                <td class="align-middle">{{ $teachers->agama }}</td>
                <td class="align-middle">{{ $teachers->no_telepon }}</td>
                <td class="align-middle">{{ $teachers->jadwal }}</td>
                <td class="align-middle">{{ $teachers->alamat }}</td>
            </tr>
            @php
            $n++
            @endphp
        </tbody>
    </table>
</div>
@endsection