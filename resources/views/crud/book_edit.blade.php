@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
          <h3 class="fw-bold mb-3">Data Buku</h3>
        </div>
      </div>
      
      <!-- FORM SECTION -->
      <div class="container-fluid py-5">
          <div class="container">
              <div class="table-responsive bg-white p-4 rounded shadow-sm">
                  <h2 class="mb-4 text-center">Edit Data Buku</h2>
                  <form action="{{ route('adm-buku.update', $book->ID_Buku) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" id="Judul" name="Judul" value="{{ old('Judul', $book->Judul) }}" maxlength="255" required>
                    </div>

                    <div class="form-group">
                        <label for="Author">Author</label>
                        <input type="text" class="form-control" id="Author" name="Author" value="{{ old('Author', $book->Author) }}" maxlength="100">
                    </div>

                    <div class="form-group">
                        <label for="Sampul">Sampul</label>
                        <input type="url" class="form-control" id="Sampul" name="Sampul" value="{{ old('Sampul', $book->Sampul) }}" maxlength="255" required>
                    </div>

                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="Deskripsi" name="Deskripsi" maxlength="999" required>{{ old('Deskripsi', $book->Deskripsi) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Halaman">Halaman</label>
                        <input type="text" class="form-control" id="Halaman" name="Halaman" value="{{ old('Halaman', $book->Halaman) }}" maxlength="255" required>
                    </div>

                    <div class="form-group">
                        <label for="Penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ old('Penerbit', $book->Penerbit) }}" maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="Tahun">Tahun</label>
                        <input type="number" class="form-control" id="Tahun" name="Tahun" value="{{ old('Tahun', $book->Tahun) }}">
                    </div>

                    <div class="form-group">
                        <label for="Berat">Berat</label>
                        <input type="number" class="form-control" id="Berat" name="Berat" value="{{ old('Berat', $book->Berat) }}">
                    </div>

                    <div class="form-group">
                        <label for="ISBN">ISBN</label>
                        <input type="number" class="form-control" id="ISBN" name="ISBN" value="{{ old('ISBN', $book->ISBN) }}">
                    </div>

                    <div class="form-group">
                        <label for="Lebar">Lebar</label>
                        <input type="number" class="form-control" id="Lebar" name="Lebar" value="{{ old('Lebar', $book->Lebar) }}">
                    </div>

                    <div class="form-group">
                        <label for="Panjang">Panjang</label>
                        <input type="number" class="form-control" id="Panjang" name="Panjang" value="{{ old('Panjang', $book->Panjang) }}">
                    </div>

                    <div class="form-group">
                        <label for="Bahasa">Bahasa</label>
                        <input type="text" class="form-control" id="Bahasa" name="Bahasa" value="{{ old('Bahasa', $book->Bahasa) }}" maxlength="255" required>
                    </div>

                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ old('Kategori', $book->Kategori) }}" maxlength="255" required>
                    </div>

                    <div class="form-group">
                        <label for="Stok">Stok</label>
                        <input type="number" class="form-control" id="Stok" name="Stok" value="{{ old('Stok', $book->Stok) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Akses">Akses</label>
                        <select class="form-control" id="Akses" name="Akses" required>
                            <option value="Dapat dipinjam" {{ old('Akses', $book->Akses) == 'Dapat dipinjam' ? 'selected' : '' }}>Dapat dipinjam</option>
                            <option value="Baca di tempat" {{ old('Akses', $book->Akses) == 'Baca di tempat' ? 'selected' : '' }}>Baca di tempat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <!-- Button section with back button first (red), then edit button (yellow) -->
                        <a href="{{ route('adm-buku.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-warning ml-2">Edit</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
</div>

@endsection
