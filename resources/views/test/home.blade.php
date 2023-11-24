@extends('layouts.main')

@section('title', 'Home')

@section('content')
<h1>Halaman Home</h1>
<h2>Selamat datang {{Auth::user()->name}}. Anda sebagai {{Auth::user()->getRole->name}}</h2>
@endsection



