<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Book</h2>
        <form action="{{ route('adm-buku.update', $book->ID_Buku) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" id="Judul" name="Judul" value="{{ $book->Judul }}" maxlength="255" required>
            </div>

            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" class="form-control" id="Author" name="Author" value="{{ $book->Author }}" maxlength="100">
            </div>

            <div class="form-group">
                <label for="Sampul">Sampul</label>
                <input type="url" class="form-control" id="Sampul" name="Sampul" value="{{ $book->Sampul }}" maxlength="255" required>
            </div>

            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <textarea class="form-control" id="Deskripsi" name="Deskripsi" maxlength="999" required>{{ $book->Deskripsi }}</textarea>
            </div>

            <div class="form-group">
                <label for="Halaman">Halaman</label>
                <input type="text" class="form-control" id="Halaman" name="Halaman" value="{{ $book->Halaman }}" maxlength="255" required>
            </div>

            <div class="form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ $book->Penerbit }}" maxlength="255">
            </div>

            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="number" class="form-control" id="Tahun" name="Tahun" value="{{ $book->Tahun }}">
            </div>

            <div class="form-group">
                <label for="Berat">Berat</label>
                <input type="number" class="form-control" id="Berat" name="Berat" value="{{ $book->Berat }}">
            </div>

            <div class="form-group">
                <label for="ISBN">ISBN</label>
                <input type="number" class="form-control" id="ISBN" name="ISBN" value="{{ $book->ISBN }}">
            </div>

            <div class="form-group">
                <label for="Lebar">Lebar</label>
                <input type="number" class="form-control" id="Lebar" name="Lebar" value="{{ $book->Lebar }}">
            </div>

            <div class="form-group">
                <label for="Panjang">Panjang</label>
                <input type="number" class="form-control" id="Panjang" name="Panjang" value="{{ $book->Panjang }}">
            </div>

            <div class="form-group">
                <label for="Bahasa">Bahasa</label>
                <input type="text" class="form-control" id="Bahasa" name="Bahasa" value="{{ $book->Bahasa }}" maxlength="255" required>
            </div>

            <div class="form-group">
                <label for="Kategori">Kategori</label>
                <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ $book->Kategori }}" maxlength="255" required>
            </div>

            <div class="form-group">
                <label for="Stok">Stok</label>
                <input type="number" class="form-control" id="Stok" name="Stok" value="{{ $book->Stok }}" required>
            </div>

            <div class="form-group">
                <label for="Akses">Akses</label>
                <select class="form-control" id="Akses" name="Akses" required>
                    <option value="Dapat dipinjam" {{ $book->Akses == 'Dapat dipinjam' ? 'selected' : '' }}>Dapat dipinjam</option>
                    <option value="Baca di tempat" {{ $book->Akses == 'Baca di tempat' ? 'selected' : '' }}>Baca di tempat</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
            <a href="{{ route('adm-buku.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>