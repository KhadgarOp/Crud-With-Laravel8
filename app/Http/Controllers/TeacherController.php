<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request) {
        if($request->has('find')) {
            $teachers_data = Teacher::where('nama', 'LIKE', '%'.$request->find.'%')->paginate(5)->withQueryString();
        }else {
            $teachers_data = Teacher::orderBy('nama')->paginate(5);
        }
        return view ('guru.index', [
            "title" => "Guru",
            'teachers_data' => $teachers_data
        ]);
    }

    public function input(Request $request) {
        Teacher::create($request->all());
        return redirect('/guru')->with('success', 'Guru berhasil didaftarkan!');
    }

    public function update($id) {
        $teachers = Teacher::find($id);
        return view('guru/update', [
            "title" => "Update", 
            'teachers' => $teachers
        ]);
    }

    public function submit(Request $request, $id) {
        $teachers = Teacher::find($id);
        $teachers->update($request->all());
        return redirect('/guru')->with('success', 'Data berhasil di update!');
    }
    
    public function delete($id) {
        $teachers = Teacher::find($id);
        $teachers->delete();
        return redirect('/guru')->with('success', 'Data berhasil di delete!');
    }

    public function view($id) {
        $teachers = Teacher::find($id);
        return view('guru/view', [
            "title" => "View", 
            'teachers' => $teachers
        ]);
    }
}
