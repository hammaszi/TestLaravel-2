@extends('layouts.main')

@section('title', 'Student Detail')

@section('content')
    <h1>Detail Siswa {{ $detail['nama_siswa'] }}</h1> <br>
    <div class="my-3">
        <img src="{{url('storage/students/'.$detail->img)}}" alt="">
    </div>

    <table class="table table-bordered">
        <thead>
            <th>Nama</th>
            <th>NIS</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Wali Kelas</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $detail['nama_siswa'] }}</td>
                <td>{{ $detail['nis']}}</td>
                <td>
                @if ($detail->gender == 'L')
                    Laki-laki
                @else
                    Perempuan
                @endif</td>
                <td>{{ $detail['alamat'] }}</td>
                <td>{{ $detail->getKelas['nama_kelas'] }}</td>
                <td>{{ $detail->getKelas->getWali->nama_guru }}</td>
            </tr>
        </tbody>
    </table>
@endsection
