@extends('layouts.main')

@section('title', 'students')

@section('content')
<h1>List Students Deleted</h1>
<br>
<table class="table table-bordered">
    <thead>
        <th>No.</th>
        <th>Name</th>
        <th>NIS</th>
        <th style="text-align: center">Action</th>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->nis }}</td>
                <td style="text-align: center"><a href="/student/{{$data->id}}/Restore">Restore</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

    

