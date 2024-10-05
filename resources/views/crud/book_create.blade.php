@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Buat Data Buku</h3>
      </div>
    </div>

    <!-- FORM SECTION -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Buku</h2>

          <!-- Menampilkan Pesan Error Validasi (Opsional) -->
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <!-- Integrasi Form Backend Mulai di Sini -->
          <form action="{{ route('adm-buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="Judul">Judul</label>
              <input type="text" class="form-control" id="Judul" name="Judul" value="{{ old('Judul') }}" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Author">Author</label>
              <input type="text" class="form-control" id="Author" name="Author" value="{{ old('Author') }}" maxlength="100">
            </div>

            <div class="form-group">
              <label for="Sampul">Sampul (URL)</label>
              <input type="url" class="form-control" id="Sampul" name="Sampul" value="{{ old('Sampul') }}" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Deskripsi">Deskripsi</label>
              <textarea class="form-control" id="Deskripsi" name="Deskripsi" maxlength="999" required>{{ old('Deskripsi') }}</textarea>
            </div>

            <div class="form-group">
              <label for="Halaman">Halaman</label>
              <input type="text" class="form-control" id="Halaman" name="Halaman" value="{{ old('Halaman') }}" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Penerbit">Penerbit</label>
              <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ old('Penerbit') }}" maxlength="255">
            </div>

            <div class="form-group">
              <label for="Tahun">Tahun</label>
              <input type="number" class="form-control" id="Tahun" name="Tahun" value="{{ old('Tahun') }}">
            </div>

            <div class="form-group">
              <label for="Berat">Berat (gr)</label>
              <input type="number" class="form-control" id="Berat" name="Berat" value="{{ old('Berat') }}">
            </div>

            <div class="form-group">
              <label for="ISBN">ISBN</label>
              <input type="number" class="form-control" id="ISBN" name="ISBN" value="{{ old('ISBN') }}">
            </div>

            <div class="form-group">
              <label for="Lebar">Lebar (cm)</label>
              <input type="number" class="form-control" id="Lebar" name="Lebar" value="{{ old('Lebar') }}">
            </div>

            <div class="form-group">
              <label for="Panjang">Panjang (cm)</label>
              <input type="number" class="form-control" id="Panjang" name="Panjang" value="{{ old('Panjang') }}">
            </div>

            <div class="form-group">
              <label for="Bahasa">Bahasa</label>
              <input type="text" class="form-control" id="Bahasa" name="Bahasa" value="{{ old('Bahasa') }}" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Kategori">Kategori</label>
              <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ old('Kategori') }}" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Stok">Stok</label>
              <input type="number" class="form-control" id="Stok" name="Stok" value="{{ old('Stok', 0) }}" required>
            </div>

            <div class="form-group">
              <label for="Akses">Akses</label>
              <select class="form-control" id="Akses" name="Akses" required>
                <option value="Dapat dipinjam" {{ old('Akses') == 'Dapat dipinjam' ? 'selected' : '' }}>Dapat dipinjam</option>
                <option value="Baca di tempat" {{ old('Akses') == 'Baca di tempat' ? 'selected' : '' }}>Baca di tempat</option>
              </select>
            </div>

            <div class="form-group">
              <!-- Tombol kembali dan submit -->
              <a href="{{ route('adm-buku.index') }}" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-primary ml-2">Simpan</button>
            </div>
          </form>
          <!-- Integrasi Form Backend Berakhir di Sini -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
