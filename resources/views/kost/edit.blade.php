  @extends('layouts.navbar')

  @section('content')
      <div class="card-body col-md-5">
          <h4 class="mb-4 mt-2">edit data kost!</h4>


          <div class="mb-1">
              <form action="/kost/{{ $kost->id }}" method="post" class="d-inline" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <div class="form-group mb-3">
                      <label for="nama">Nama kost</label>
                      <input value="{{ old('nama', $kost->nama) }}" required type="text" class="form-control mt-2"
                          id="nama" name="nama" placeholder="Masukkan nama kost">
                  </div>

                  <div class="form-group mb-3">
                      <label for="foto_rumah">Foto kost</label>
                      <input value="{{ old('foto_rumah') }}" required type="file" class="form-control mt-2"
                          id="foto_rumah" name="foto_rumah">
                  </div>

                  <div class="form-group mb-3">
                      <label for="penghuni" class="mb-2">penghuni</label>
                      <select class="form-select" name="penghuni_id" id="kategori">
                          @foreach ($penghuni as $p)
                              @if (old('penghuni_id', $kost->penghuni_id) == $p->id)
                                  <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                              @else
                                  <option value="{{ $p->id }}">{{ $p->nama }}</option>
                              @endif
                          @endforeach
                      </select>

                      </select>



                  </div>

                  <div class="form-group
                                  mb-3">
                      <label for="alamat">alamat</label>
                      <input required value="{{ old('nama', $kost->alamat) }}" type="text" class="form-control mt-2"
                          id="alamat" name="alamat" placeholder="Masukkan alamat">
                  </div>

                  <div class="form-group mb-3">
                      <label for="harga">harga</label>
                      <input required value="{{ old('nama', $kost->harga) }}" type="number" class="form-control mt-2"
                          id="harga" name="harga" placeholder="Masukkan harga">
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah data!</button>
                  <a href="/kost" class="btn btn-success">kembali</a>
          </div>
          </form>
      </div>
  @endsection
