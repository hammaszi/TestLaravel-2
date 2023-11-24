@extends('layouts.main')

@section('title', 'About')
    
@section('content')
<h1>Halaman About bosku</h1>
<form action="/input-str" method="post">
<input type="text", name="nama">

</form>

@endsection