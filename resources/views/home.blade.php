{{-- halaman home --}}
@extends('layouts.navbar2')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center col-lg-1" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="mt-5 text-center p-3 mb-3 bg-white rounded">
        <h1 class="display-1"><i class="fas fa-home icon"></i></h1>
        <h3><b>Selamat Datang di Chaekost</b></h3>
        <p>lihat data data kost yang ada di chaekost! </p>
        <a href="/data-kost" class="btn btn-danger">
            <i class="fas fa-eye"></i> Lihat
        </a>

    </div>
@endsection
