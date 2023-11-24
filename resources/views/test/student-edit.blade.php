@extends('Layouts.main')
@section('title', 'student-add')

@section('content')
    <h1>Tambah Data Siswa</h1>
    <div class="mt-5 col-8">
        <form action="/student/{{$student->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="nama_siswa" class="form-control" id="name" value="{{$student->nama_siswa}}" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{$student->gender}}">
                    @if ($student->gender == "L")
                        Laki-laki
                    @else 
                        Perempuan
                    @endif
                    </option>
                    @if ($student->gender == "L")
                        <option value="P">Perempuan</option>
                    @else 
                        <option value="L">Laki-laki</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" name="nis" class="form-control" id="nis" value="{{$student->nis}}" required>
            </div>

            <div class="mb-3">
                <label for="class-id">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{$student->class_id}}">{{$student->getKelas->nama_kelas}}</option>
                    @foreach ($kelas as $data)
                        <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="nis" value="{{$student->alamat}}" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection