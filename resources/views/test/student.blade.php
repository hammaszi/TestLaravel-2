@extends('layouts.main')

@section('title', 'students')

@section('content')
<div class="my-5 d-flex justify-content-between">
<a href="/student-add" class="btn btn-primary">Add Data</a>
<a href="students/deleted" class="btn btn-info">Show Deleted Data</a>
</div>
@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<h1>List Students</h1>
<div class="my-5 col-12 col-sm-8 col-md-5">
    <form action="" method="get">
        <div class="input-group my-3">
            <input type="text" class="form-control" name="student" placeholder="Student's name" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">Search</button>
          </div>
    </form>
    
</div>


<table class="table table-bordered">
    <thead>
        <th>No.</th>
        <th>Name</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th style="text-align: center">Action</th>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->getKelas->nama_kelas}}</td>
                <td style="text-align: center"><a href="student/{{$data['id']}}">detail</a> || <a href="student-update/{{$data['id']}}">edit</a> || <a href="student-delete/{{$data['id']}}">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="my-5">
    {{$studentList->withQueryString()->links()}}  
</div>

@endsection

    
