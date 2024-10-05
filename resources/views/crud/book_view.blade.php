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
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <h1 class="mb-2">{{ $book->Judul }}</h1>
                            <h4 class="text-secondary mb-3">{{ $book->Author ?? 'N/A' }}</h4>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-5">
                            <img class="img-fluid align-items-center" src="{{ asset($book->Sampul) }}" alt="Cover {{ $book->Judul }}" width="100%">
                        </div>
                        <div class="col-lg-7">
                            <h4 class="mb-3">Deskripsi Buku</h4>
                            <p class="mb-4" style="text-align: justify;">
                                {{ $book->Deskripsi ?? 'Tidak ada deskripsi.' }}
                            </p>

                            <h4 class="mb-3">Detail Buku</h4>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><strong>Jumlah Halaman</strong><br>{{ $book->Halaman ?? 'N/A' }} halaman</li>
                                        <li><strong>Penerbit</strong><br>{{ $book->Penerbit ?? 'N/A' }}</li>
                                        <li><strong>Tahun Terbit</strong><br>{{ $book->Tahun ?? 'N/A' }}</li>
                                        <li><strong>Berat</strong><br>{{ $book->Berat ? number_format($book->Berat / 1000, 2) . ' kg' : 'N/A' }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><strong>ISBN</strong><br>{{ $book->ISBN ?? 'N/A' }}</li>
                                        <li><strong>Lebar</strong><br>{{ $book->Lebar ?? 'N/A' }} cm</li>
                                        <li><strong>Panjang</strong><br>{{ $book->Panjang ?? 'N/A' }} cm</li>
                                        <li><strong>Bahasa</strong><br>{{ $book->Bahasa ?? 'N/A' }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('adm-buku.index') }}" class="btn btn-danger">Kembali</a>
                                <a href="{{ route('adm-buku.edit', $book->ID_Buku) }}" class="btn btn-warning ml-2">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>

@endsection
