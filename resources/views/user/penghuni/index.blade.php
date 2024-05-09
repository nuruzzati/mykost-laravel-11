@extends('layouts.navbar2')



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
    <div class="card bg-white mt-3" style="text-transform: capitalize;">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped" id="tables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Jenis Kelamin</th>
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

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
@endsection
