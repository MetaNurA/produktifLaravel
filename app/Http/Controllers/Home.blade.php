
@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="display-4">Home Page</h1>
        <p class="lead"> This is the Home Page</p>
    </div>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Kuliah</p>
    <ul>
        @foreach ($matakuliah as $p)
        
        @endforeach
    </ul>
</div>

@endsection