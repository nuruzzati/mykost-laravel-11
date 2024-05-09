@extends('layouts.navbar2')

@section('content')
    <div class="text-center mt-3 p-3 mb-3 bg-white rounded">
        <h4 style="font-weight: bold" class=""><i class="fas fa-home icon"></i> Rumah kost</h4>
        <p>Temukan rumah kost impian kamu, hanya di Chaekost.</p>
    </div>

    @if ($kost->isEmpty())
        <div class="text-center mt-3">
            <p>Belum ada data rumah kost.</p>
        </div>
    @else
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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
