<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request) {
        if($request->has('find')) {
            $students_data = Student::where('nama', 'LIKE', '%'.$request->find.'%')->paginate(5)->withQueryString();
        }else {
            $students_data = Student::orderBy('nama')->paginate(5);
        }
        return view ('siswa.index', [
            "title" => "Siswa",
            'students_data' => $students_data
        ]);
    }

    public function input(Request $request) {
        Student::create($request->all());
        return redirect('/siswa')->with('success', 'Siswa berhasil didaftarkan!');
    }

    public function update($id) {
        $students = Student::find($id);
        return view('siswa/update', [
            "title" => "Update", 
            'students' => $students
        ]);
    }

    public function submit(Request $request, $id) {
        $students = Student::find($id);
        $students->update($request->all());
        return redirect('/siswa')->with('success', 'Data berhasil di update!');
    }
    
    public function delete($id) {
        $students = Student::find($id);
        $students->delete();
        return redirect('/siswa')->with('success', 'Data berhasil di delete!');
    }

    public function view($id) {
        $students = Student::find($id);
        return view('siswa/view', [
            "title" => "View", 
            'students' => $students
        ]);
    }
}