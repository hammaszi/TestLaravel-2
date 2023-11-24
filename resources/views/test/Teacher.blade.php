@extends('layouts.main')

@section('title', 'Teacher')

@section('content')
<div class="my-5">
    <a href="" class="btn btn-primary">Add Data</a>
    </div>
    <h1>List Guru</h1>
    <table class="table">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($guru as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $data['nama_guru'] }}
                </td>
                <td><a href="teacher/{{$data->id}}">detail</a></td>
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
@endsection
