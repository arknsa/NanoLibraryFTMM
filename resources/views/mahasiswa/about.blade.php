<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nano Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('assets1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid sticky-top bg-primary" style="z-index: 1030;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a href="/" class="navbar-brand">
                    <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/mhs-home" class="nav-item nav-link text-white">Beranda</a>
                        <a href="/mhs-profil" class="nav-item nav-link text-white">Tentang Kami</a>
                
                        <!-- Dropdown Layanan -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/mhs-peminjaman" class="dropdown-item">Peminjaman Buku</a>
                                <a href="/mhs-ebook" class="dropdown-item ">E-Book</a>
                                <a href="https://e-journal.unair.ac.id/JATM" class="dropdown-item">E-Journal</a>
                            </div>
                        </div>
                
                        <!-- Dropdown Status -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Status</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/mhs-riwayat_peminjaman" class="dropdown-item">Riwayat Peminjaman</a>
                                <a href="/mhs-riwayat_pengembalian" class="dropdown-item">Riwayat Pengembalian</a>
                            </div>
                        </div>
                
                        <a href="/mhs-biodata" class="nav-item nav-link">
                            <button type="button" class="btn text-white p-0 d-none d-lg-block">
                                <i class="fa fa-user"></i>
                            </button>
                        </a>
                        <a href="#" class="nav-item nav-link">
                            <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    
    
        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->
    
        <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-0">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-light mb-4" style="text-align: justify;">Nano Lib</h1>
                    <p class="text-light mb-4" style="text-align: justify;">Nanolib adalah perpustakaan di Gedung Nano FTMM yang menyediakan berbagai literatur tentang teknologi dan multidisiplin. Kami siap mendukung kebutuhan belajarmu, baik lewat buku fisik maupun digital."</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="text-light mb-3"><i class="fa fa-check text-light me-2"></i>Fasilitas Lengkap</h6>
                            <h6 class="text-light mb-0"><i class="fa fa-check text-light me-2"></i>Koleksi Skripsi</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-light mb-3"><i class="fa fa-check text-light me-2"></i>Koleksi Buku</h6>
                            <h6 class="text-light mb-0"><i class="fa fa-check text-light me-2"></i>Koleksi Proposal</h6>
                        </div>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-outline-light btn-square me-3" href="http://twitter.com/ftmmunair"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square me-3" href="https://www.youtube.com/@ftmmunair"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-square me-3" href="https://www.instagram.com/ftmmunair/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-square me-3" href="https://www.linkedin.com/in/ftmm-universitas-airlangga-8161ab207"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{asset('assets1/img/ftmm.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-4">Kenalan Dengan Pengembang Website Nanolib</h1>
                    <p class="mb-4">Mahasiswa Semester 5 Teknologi Sains Data Kelas Basis Data A1</p>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item bg-white rounded p-4 pt-0">
                        <img class="img-fluid rounded-circle p-4" src="{{asset('assets1/img/team-1.jpg')}}" alt="">
                        <h5 class="mb-0">Jihan Ashifa Hakim</h5>
                        <small>164221016</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item bg-white rounded p-4 pt-0">
                        <img class="img-fluid rounded-circle p-4" src="{{asset('assets1/img/team-2.jpg')}}" alt="">
                        <h5 class="mb-0">Yusuf Eka Maulana</h5>
                        <small>164221020</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item bg-white rounded p-4 pt-0">
                        <img class="img-fluid rounded-circle p-4" src="{{asset('assets1/img/team-3.jpg')}}" alt="">
                        <h5 class="mb-0">Amalika Ari Anindya</h5>
                        <small>164221029</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item bg-white rounded p-4 pt-0">
                        <img class="img-fluid rounded-circle p-4" src="{{asset('assets1/img/team-4.jpg')}}" alt="">
                        <h5 class="mb-0">Arkan Syafiq Attaqy</h5>
                        <small>164221062</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                    </a>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="http://twitter.com/ftmmunair"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@ftmmunair"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ftmmunair/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/ftmm-universitas-airlangga-8161ab207"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Hubungi kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Gedung Nano, Kampus C UNAIR kota Surabaya</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62881-0360-00830</p>
                    <p><i class="fa fa-envelope me-3"></i>info@ftmm.unair.ac.id</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Layanan Kami</h5>
                    <a class="btn btn-link" href="/mhs-about">Ruang Baca</a>
                    <a class="btn btn-link" href="/mhs-peminjaman">Peminjaman Buku</a>
                    <a class="btn btn-link" href="/mhs-ebook">E-Book</a>
                    <a class="btn btn-link" href="https://e-journal.unair.ac.id/JATM">E-Journal</a>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <img class="align-center" src="{{ asset('assets1/img/footer@300x.png') }}" alt="img-fluid" width="100%">
                </div>
            </div>

        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">NANO Library
                            Created By Kelompok 8 Basis Data A1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets1/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets1/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets1/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets1/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets1/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets1/js/main.js')}}"></script>
</body>

</html>