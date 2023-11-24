<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show() {
        $guru = teacher::all();
        return view('test.Teacher', ['guru' =>  $guru]);
    }

    public function show_detail($id)
    {
        $guru = teacher::with('getKelas.getSiswa')-> findOrFail($id);
        return view('test.teacher-detail', ['detail' => $guru]);
    }
}
