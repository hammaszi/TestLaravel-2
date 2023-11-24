@extends('Layouts.main')
@section('title', 'delete student')
    
@section('content')
<div>
    <h2 >Apakah anda yakin untuk menghapus {{$student->nama_siswa}} ({{$student->nis}})</h2>
    <form action="/student-destroy/{{$student->id}}" style="display: inline-block" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">HAPUS</button> 
        <a href="/students" class="btn btn-primary">BATAL</a>
    </form>

</div>

@endsection