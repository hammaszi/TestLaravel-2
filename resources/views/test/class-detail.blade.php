@extends('layouts.main')
@section('title', 'detail kelas')
    
@section('content')

<h1>Halaman detail kelas {{$detail['nama_kelas']}}</h1>
<h4>Wali Kelas = {{$detail->getWali->nama_guru}}</h4>

<h5>Nama Siswa</h5>
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
            @foreach ($detail->getSiswa as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>{{ $data->nis }}</td>
                    <td><a href="../student/{{$data->id}}">detail</a></td>
                </tr>
            @endforeach

    </tbody>
</table>
@endsection