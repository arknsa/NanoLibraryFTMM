<div class="container mt-5">
    <h2>Book Details</h2>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Sampul:</strong></p>
            <div class="product-image">
                <img src="{{ asset($book->Sampul) }}" alt="Cover {{ $book->Judul }}" class="img-thumbnail" style="width: 150px; height: auto;">
            </div>
            <h5 class="card-title">{{ $book->Judul }}</h5>
            <p class="card-text"><strong>Author:</strong> {{ $book->Author ?? 'N/A' }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $book->Deskripsi }}</p>
            <p class="card-text"><strong>Halaman:</strong> {{ $book->Halaman }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $book->Penerbit ?? 'N/A' }}</p>
            <p class="card-text"><strong>Tahun:</strong> {{ $book->Tahun ?? 'N/A' }}</p>
            <p class="card-text"><strong>Berat:</strong> {{ $book->Berat ?? 'N/A' }} gram</p>
            <p class="card-text"><strong>ISBN:</strong> {{ $book->ISBN ?? 'N/A' }}</p>
            <p class="card-text"><strong>Lebar:</strong> {{ $book->Lebar ?? 'N/A' }} cm</p>
            <p class="card-text"><strong>Panjang:</strong> {{ $book->Panjang ?? 'N/A' }} cm</p>
            <p class="card-text"><strong>Bahasa:</strong> {{ $book->Bahasa }}</p>
            <p class="card-text"><strong>Kategori:</strong> {{ $book->Kategori }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $book->Stok }}</p>
            <p class="card-text"><strong>Akses:</strong> {{ $book->Akses }}</p>
            <a href="{{ route('adm-buku.index') }}" class="btn btn-secondary">Back to Manage Book</a>
            <a href="{{ route('adm-buku.edit', $book->ID_Buku) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>