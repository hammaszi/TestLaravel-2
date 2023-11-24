<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\studentCreateRequest;

class studentController extends Controller
{
    public function show(Request $request) 
    {
        // $nama = 'masBro';
        // $telp = '0896424018440';

        // return view('test.student', ['nama'=> $nama, 'telp' => $telp]);
        
        // $student_data = student::all();

        // $student_data = student::with('getKelas.getWali')->get();
        // return view('test.student', ['studentList' => $student_data]);

        $student_key = $request->student;
        $student_data = student::with('getKelas')
                        ->where('nama_siswa', 'LIKE', '%'.$student_key.'%')
                        ->orWhere('gender', $student_key)
                        ->orWhere('nis', 'LIKE', '%'.$student_key.'%')
                        ->orWhere('alamat', 'LIKE', '%'.$student_key.'%')
                        ->orWhereHas('getKelas', function($query) use($student_key) {
                            $query->where('nama_kelas', 'LIKE', '%'.$student_key.'%');
                        })
                        ->paginate(5);
        return view('test.student', ['studentList' => $student_data]);

        //Query Builder
        // $student = DB::table('students')->get();

        //Eloquen 
        // $student = student::all(); 
        // student::create([
        //     'nama_siswa' => 'Jojo',
        //     'gender' => 'L',
        //     'alamat' => 'arteri',
        //     'class_id' => 2 
        // ]);

        // student::find(5)->update([
        //     'nama_siswa' => 'Joni',
        //     'class_id' => 3
        // ]);

        // student::find(5)->delete();

        // dd($student);
    }

    public function show_Detail($id)
    {
        $student = student::with(['getKelas.getWali'])
        ->findOrFail($id);
        return view('test.student-detail', ['detail' => $student]);
    }

    public function show_Raw()
    {
        $student = DB::select("select a.nama_siswa, a.gender, a.alamat, b.nama_kelas, c.nama_guru from students a inner join class b on a.class_id = b.id inner join teacher c on b.teacher_id = c.id");
        return view('test.student', ['detail'=>$student]);
    }

    public function create_data()
    {
        $kelas = Classroom::select('id', 'nama_kelas')->get();
        return view('test.student-add', ['kelas' => $kelas]);
    }
 
    public function save_data(studentCreateRequest $request)
    {
        $new = '';
        if($request->file('photo')){
            $ext = $request->file('photo')->getClientOriginalExtension();
            $new = $request->nama_siswa.'-'.now()->timestamp.'.'.$ext;
            $request->file('photo')->storeAs('students', $new);
        }

        $request['img'] = $new;
        $student = student::create($request->all());
        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student succes!');
        }

        return redirect('/students');
    }

    public function update_data(Request $request, $id)
    {
        $data = student::with('getKelas')->findOrFail($id);
        $kelas = Classroom::where('id', '!=', $data->class_id)->get(['id', 'nama_kelas']);
        return view('test.student-edit', ['student' => $data, 'kelas' => $kelas]);
    }

    public function submit_data(Request $request, $id) 
    {
        $student = student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id)
    {
        $student = student::findOrFail($id);
        return view('test.student-delete', ['student' => $student]);
    }

    public function delete_data($id) 
    {
        $student = student::findOrFail($id)->delete();
        if ($student) {
           Session::flash('status','success');
           Session::flash('message', 'delete student success!');
        }
        return redirect('/students');
    }

    public function show_deleted()
    {
        $student_data = student::onlyTrashed()->get();
        return view('test.student-deleted', ['studentList' => $student_data]);

    }

    public function restore_data($id)
    {
        $deleted = student::withTrashed()->where('id', $id)->restore();

        if ($deleted) {
            Session::flash('status','success');
            Session::flash('message', 'Restore student success!');
         }

        return redirect('/students');
    }
}
