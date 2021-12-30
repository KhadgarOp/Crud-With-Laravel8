@extends('layouts.main')

@section('container')
<div class="container" style="margin-top: 100px;">
    <h1 class="text-black text-center mt-5">{{ $students->nama }}</h1>
    
    <table class="table table-success table-striped text-center mt-5">
        <thead>
            <tr>
                <th class="align-middle">No</th>
                <th class="align-middle">Siswa</th>
                <th class="align-middle">Kelas</th>
                <th class="align-middle">Jenis Kelamin</th>
                <th class="align-middle">Agama</th>
                <th class="align-middle">Saudara</th>
                <th class="align-middle">Telepon</th>
                <th class="align-middle">Tanggal Lahir</th>
                <th class="align-middle">NISN</th>
                <th class="align-middle">NIS</th>
                <th class="align-middle">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php
            $n = 1 
            @endphp
            <tr>
                <td class="align-middle">{{ $n }}</td>
                <td class="align-middle">{{ $students->nama }}</td>
                <td class="align-middle">{{ $students->kelas }}</td>
                <td class="align-middle">{{ $students->jenis_kelamin }}</td>
                <td class="align-middle">{{ $students->agama }}</td>
                <td class="align-middle">{{ $students->saudara }}</td>
                <td class="align-middle">{{ $students->no_telepon }}</td>
                <td class="align-middle">{{ $students->tanggal_lahir }}</td>
                <td class="align-middle">{{ $students->nisn }}</td>
                <td class="align-middle">{{ $students->nis }}</td>
                <td class="align-middle">{{ $students->alamat }}</td>
            </tr>
            @php
            $n++
            @endphp
        </tbody>
    </table>
</div>
@endsection