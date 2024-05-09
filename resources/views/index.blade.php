{{-- halaman home --}}
@extends('layouts.navbar')

@section('content')
    <div class="mt-5 text-center p-3 mb-3 bg-white rounded">
        <h1 class="display-1"><i class="fas fa-home icon"></i></h1>
        <h3><b>Selamat Datang di Chaekost, {{ auth()->user()->name }}</b></h3>
        <p>jelajahi kost impian dengan harga terjangkau </p>
        <a href="/kost" class="btn btn-danger">
            <i class="fas fa-search"></i> Jelajahi
        </a>

    </div>
@endsection
