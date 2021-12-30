@extends('layouts.main')

@section('container')
    <h1 class="text-black text-center">Masyarakat Sekolah</h1>
    
    <table class="table table-success table-striped text-center mt-5">
        <thead>
            <tr>
                <th class="align-middle">No</th>
                <th class="align-middle">Masyarakat Sekolah</th>
                <th class="align-middle">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle">1</td>
                <td class="align-middle">Siswa</td>
                <td class="align-middle">
                    <a href="/siswa" class="btn btn-info">Go</a>
                </td>
            </tr>
            <tr>
                <td class="align-middle">2</td>
                <td class="align-middle">Guru</td>
                <td class="align-middle">
                    <a href="/guru" class="btn btn-info">Go</a>
                </td>
            </tr>
            <tr>
                <td class="align-middle">3</td>
                <td class="align-middle">Karyawan</td>
                <td class="align-middle">
                    <a href="/karyawan" class="btn btn-info">Go</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection