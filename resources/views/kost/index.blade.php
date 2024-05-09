@extends('layouts.navbar')

@section('content')
    <div class="text-center mt-3 p-3 mb-3 bg-white rounded">
        <h4 style="font-weight: bold" class=""><i class="fas fa-home icon"></i> Rumah kost</h4>
        <p>Temukan rumah kost impian kamu, hanya di Chaekost.</p>
    </div>
    <a href="/kost/create" class="btn btn-success mb-3"> Tambah rumah kost!</a>

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="row">
        @foreach ($kost as $k)
            <div class="col-md-3 mb-4">
                <div class="card">
                    @if ($k->foto_rumah)
                        <img src="{{ asset('storage/' . $k->foto_rumah) }}" alt="Foto Kost">
                    @else
                        <p>Belum ada gambar terkait</p>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title ">{{ $k->nama }}</h5>
                        <p class="card-text">Penghuni:
                            @if ($k->penghuni)
                                {{ $k->penghuni->nama }}
                            @else
                                Penghuni kosong
                            @endif
                        </p>

                        <p class="card-text">Alamat: {{ $k->alamat }}</p>
                        <p class="card-text">Harga: Rp{{ number_format($k->harga, 0, ',', '.') }}/bulan</p>
                        <a href="/kost/{{ $k->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/kost/{{ $k->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('yakin ingin menghapus data {{ $k->nama }}?')" href="#"
                                class="btn btn-danger">Hapus</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
