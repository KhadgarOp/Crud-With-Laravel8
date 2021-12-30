<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(Request $request) {
        if($request->has('find')) {
            $karyawans_data = Karyawan::where('nama', 'LIKE', '%'.$request->find.'%')->paginate(5)->withQueryString();
        }else {
            $karyawans_data = Karyawan::orderBy('nama')->paginate(5);
        }
        return view ('karyawan.index', [
            "title" => "Karyawan",
            'karyawans_data' => $karyawans_data
        ]);
    }

    public function input(Request $request) {
        Karyawan::create($request->all());
        return redirect('/karyawan')->with('success', 'Karyawan berhasil didaftarkan!');
    }

    public function update($id) {
        $karyawans = Karyawan::find($id);
        return view('karyawan/update', [
            "title" => "Update", 
            'karyawans' => $karyawans
        ]);
    }

    public function submit(Request $request, $id) {
        $karyawans = Karyawan::find($id);
        $karyawans->update($request->all());
        return redirect('/karyawan')->with('success', 'Data berhasil di update!');
    }
    
    public function delete($id) {
        $karyawans = Karyawan::find($id);
        $karyawans->delete();
        return redirect('/karyawan')->with('success', 'Data berhasil di delete!');
    }

    public function view($id) {
        $karyawans = Karyawan::find($id);
        return view('karyawan/view', [
            "title" => "View", 
            'karyawans' => $karyawans
        ]);
    }
}
