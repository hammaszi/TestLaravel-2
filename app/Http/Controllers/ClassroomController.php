<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    
    public function show(){
        $class = Classroom::with('getSiswa', 'getWali')->get();
        return view('test.Classroom', ['kelas' => $class]);
    }

    public function show_detail($id) 
    {
        $class = Classroom::with('getSiswa', 'getWali')->findOrFail($id);
        return view('test.class-detail', ['detail' => $class]);
    }

}
