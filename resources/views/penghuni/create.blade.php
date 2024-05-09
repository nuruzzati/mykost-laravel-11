  @extends('layouts.navbar')

  @section('content')
      <div class="card-body col-md-5">
          <h4 class="mb-4 mt-2">tambah data penghuni!</h4>
          <form method="post" action="/penghuni">
              @csrf
              <div class="form-group mb-3">
                  <label for="nama">Nama penghuni</label>
                  <input required type="text" class="form-control mt-2" id="nama" name="nama"
                      placeholder="Masukkan nama penghuni">
              </div>
              <div class="form-group mb-3">
                  <label for="telepon">telepon</label>
                  <input required type="number" class="form-control mt-2" id="telepon" name="telepon"
                      placeholder="Masukkan no telepon">
              </div>
              <div class="form-group mb-3">
                  <label for="kelamin">kelamin</label>
                  <select class="form-control" name="kelamin" id="kelamin">
                      <option value="laki-laki">laki-laki</option>
                      <option value="perempuan">perempuan</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Tambah data!</button>
              <a href="/penghuni" class="btn btn-success">kembali</a>
          </form>
      </div>
  @endsection
