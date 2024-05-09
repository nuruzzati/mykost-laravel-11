  @extends('layouts.navbar')

  @section('content')
      {{-- nama penghuni_id alamat harga --}}
      <div class="card-body col-md-5">
          <h4 class="mb-4 mt-2">tambah data kost!</h4>
          <form method="post" action="/kost" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                  <label for="nama">Nama kost</label>
                  <input value="{{ old('nama') }}" required type="text" class="form-control mt-2" id="nama"
                      name="nama" placeholder="Masukkan nama kost">
              </div>

              <div class="form-group mb-3">
                  <label for="foto_rumah">Foto kost</label>
                  <input value="{{ old('foto_rumah') }}" required type="file" class="form-control mt-2" id="foto_rumah"
                      name="foto_rumah">
              </div>

              <div class="form-group mb-3">
                  <label for="penghuni" class="mb-2">penghuni</label>
                  <select class="form-control" name="penghuni_id" id="penghuni">
                      @foreach ($penghuni as $p)
                          @if (old('penghuni_id') == $p->id)
                              <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                          @else
                              <option value="{{ $p->id }}">{{ $p->nama }}</option>
                          @endif
                      @endforeach
                  </select>
              </div>

              <div class="form-group mb-3">
                  <label for="alamat">alamat</label>
                  <input value="{{ old('alamat') }}" required type="text" class="form-control mt-2" id="alamat"
                      name="alamat" placeholder="Masukkan alamat">
              </div>

              <div class="form-group mb-3">
                  <label for="harga">harga</label>
                  <input value="{{ old('harga') }}" required type="number" class="form-control mt-2" id="harga"
                      name="harga" placeholder="Masukkan harga">
              </div>
              <button type="submit" class="btn btn-primary">Tambah data!</button>
              <a href="/kost" class="btn btn-success">kembali</a>
          </form>
      </div>
  @endsection
