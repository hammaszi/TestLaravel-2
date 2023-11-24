@extends('layouts.main')
@section('title', 'Classroom')
    
@section('content')
<div class="my-5">
    <a href="" class="btn btn-primary">Add Data</a>
    </div>
    <h2>Classroom list</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> No.  </th>
                <th> Nama Kelas </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{ $data->nama_kelas }} </td>
                <td><a href="class/{{$data->id}}">detail</a></td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection
