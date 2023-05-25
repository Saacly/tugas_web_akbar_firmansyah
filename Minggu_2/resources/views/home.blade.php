@extends('app')
@section('content')
    <div class="jumbroton jumbroton-fluid">
        <div class="conrainer">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan halaman Home</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach ($pelajaran as $p)
                <li>{{ $p }}</li>
            @endforeach
        </ul>
    </div>
@endsection
    
