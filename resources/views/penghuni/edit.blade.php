  @extends('layouts.navbar')

  @section('content')
      <div class="card-body col-md-5">
          <h4 class="mb-4 mt-2">edit data penghuni!</h4>


          <div class="mb-1">
              <form action="/penghuni/{{ $penghuni->id }}" method="post" class="d-inline">
                  @method('put')
                  @csrf
                  <div class="form-group mb-3">
                      <label for="nama">Nama penghuni</label>
                      <input value="{{ old('nama', $penghuni->nama) }}" required type="text" class="form-control mt-2"
                          id="nama" name="nama" placeholder="Masukkan nama penghuni">
                  </div>
                  <div class="form-group mb-3">
                      <label for="telepon">telepon</label>
                      <input value="{{ old('telepon', $penghuni->telepon) }}" required type="number"
                          class="form-control mt-2" id="telepon" name="telepon" placeholder="Masukkan no telepon">
                  </div>
                  <div class="form-group mb-3">
                      <label for="kelamin">Kelamin</label>
                      <select class="form-control" name="kelamin" id="kelamin">
                          <option value="laki-laki"
                              {{ old('kelamin', $penghuni->kelamin) == 'laki-laki' ? 'selected' : '' }}>
                              Laki-laki</option>
                          <option value="perempuan"
                              {{ old('kelamin', $penghuni->kelamin) == 'perempuan' ? 'selected' : '' }}>
                              Perempuan</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">edit data!</button>
              </form>
              <a href="/penghuni" class="btn btn-success">kembali</a>
          </div>
          </form>
      </div>
  @endsection
