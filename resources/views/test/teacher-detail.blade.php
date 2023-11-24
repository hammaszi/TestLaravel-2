@extends('Layouts.main')
@section('title', 'detail guru')

@section('content')
    <h1>Halaman Detail guru</h1>
    <br>
    
    <h5>Nama : {{$detail['nama_guru']}}</h5>
    <h5>Kelas : {{$detail->getKelas->nama_kelas}}</h5>
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail->getKelas->getSiswa as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama_siswa}}</td>
                    <td>{{$data->nis}}</td>
                    <td><a href="../student/{{$data->id}}">detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
