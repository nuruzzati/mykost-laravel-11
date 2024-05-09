@extends('layouts.navbar')



<style>
    .filter-form {
        margin: 20px;
    }

    .filter-form select {
        padding: 3px;
        border-radius: 4px;
        color: #333;
    }

    .filter-form button {
        border-radius: 4px;
        padding: 3px 16px;
        background-color: #0d6efd;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: .2s;
    }

    .filter-form button:hover {
        background-color: #1e5eee;
    }
</style>


@section('content')
    <div class="text-center mt-3 p-3 mb-3 bg-white rounded">
        <h4 style="font-weight: bold" class="">Data penghuni</h4>
        <p>daftar penghuni yang ada di chaekost.</p>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="card bg-white mt-3" style="text-transform: capitalize;">
        <div class="card-body">
            <a href="/penghuni/create" class="btn btn-success mb-3">Tambah penghuni kost!</a>
            <table class="table table-bordered table-hover table-striped" id="tables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Jenis Kelamin</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody style="text-transform: capitalize;">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($penghuni as $p)
                        <tr>
                            <td width="50">{{ $counter++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->telepon }}</td>
                            <td>{{ $p->kelamin }}</td>

                            <td width="150">
                                <a href="/penghuni/{{ $p->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                <form action="/penghuni/{{ $p->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        onclick="return confirm('yakin ingin menghapus data penghuni {{ $p->nama }}?')"
                                        class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
@endsection
