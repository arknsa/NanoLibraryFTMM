@extends('layouts.admin')

@section('content')

<div class="container mt-5 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Buku</h3>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
        <a href="{{ route('adm-buku.create') }}" class="btn btn-primary btn-round">Tambah Buku</a>
      </div>
    </div>

    <!-- Table Section Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Buku</h2>
          <table id="dataBukuTable" class="table table-hover table-striped align-middle text-center">
            <thead class="bg-primary text-white">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Sampul</th>
                <th>Author</th>
                <th>Deskripsi</th>
                <th>Halaman</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Berat</th>
                <th>ISBN</th>
                <th>Lebar</th>
                <th>Panjang</th>
                <th>Bahasa</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Akses</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $index => $book)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book->Judul }}</td>
                <td>
                  @if($book->Sampul)
                    <img src="{{ asset($book->Sampul) }}" alt="Sampul" width="50">
                  @else
                    N/A
                  @endif
                </td>
                <td>{{ $book->Author ?? 'N/A' }}</td>
                <td>{{ Str::limit($book->Deskripsi, 50) ?? 'N/A' }}</td>
                <td>{{ $book->Halaman ?? 'N/A' }}</td>
                <td>{{ $book->Penerbit ?? 'N/A' }}</td>
                <td>{{ $book->Tahun ?? 'N/A' }}</td>
                <td>{{ $book->Berat ? $book->Berat . ' gr' : 'N/A' }}</td>
                <td>{{ $book->ISBN ?? 'N/A' }}</td>
                <td>{{ $book->Lebar ?? 'N/A' }} cm</td>
                <td>{{ $book->Panjang ?? 'N/A' }} cm</td>
                <td>{{ $book->Bahasa ?? 'N/A' }}</td>
                <td>{{ $book->Kategori ?? 'N/A' }}</td>
                <td>{{ $book->Stok ?? 'N/A' }}</td>
                <td>{{ $book->Akses ?? 'N/A' }}</td>
                <td>
                  <div class="d-flex justify-content-center">
                    <!-- View Button -->
                    <a href="{{ route('adm-buku.show', $book->ID_Buku) }}" class="btn btn-outline-primary btn-sm me-2" title="View">
                      <i class="fas fa-eye"></i>
                    </a>
                    <!-- Edit Button -->
                    <a href="{{ route('adm-buku.edit', $book->ID_Buku) }}" class="btn btn-outline-warning btn-sm me-2" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('adm-buku.destroy', $book->ID_Buku) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- Tambahkan pagination jika diperlukan -->
          @if($books instanceof \Illuminate\Pagination\LengthAwarePaginator)
            {{ $books->links() }}
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
