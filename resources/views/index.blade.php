<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK PGRI Wlingi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
    .carousel-item img {
        height: clamp(180px, 38vw, 420px);
        width: 100%;
        object-fit: cover;
    }

    .welcome-image {
        width: 100%;
        max-width: 300px;
    }

    .activity-image {
        height: 180px;
        object-fit: cover;
    }

    .announcement-link {
        min-width: 0;
    }

    .announcement-link strong {
        overflow-wrap: anywhere;
    }

    @media (max-width: 575.98px) {
        .welcome-image {
            max-width: 100%;
            float: none !important;
            display: block;
            margin: 0 auto 1rem;
        }

        .activity-heading {
            align-items: flex-start !important;
            gap: 0.5rem;
        }

        .activity-heading a {
            text-align: right;
        }
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="">

                <a class="navbar-brand" href="#"><img src="img/smk.webp" alt="" width="50"> SMK PGRI
                    WLINGI</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/upacara.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Upacara</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Gemini_Generated_Image_6mnz826mnz826mnz.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MBG</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/tumpeng.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aniversery</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Sambutan Kepala Sekolah
                    </div>
                    <div class="card-body">
                        <figure>
                            <div class="">
                                <img src="img/bambang.webp" alt="Kepala sekolah SMK PGRI Wlingi"
                                    class="img-thumbnail float-start me-3 mb-2 welcome-image">
                                <p><b>Assalamu'alaikum Warahmatullahi Wabarakatuh.</b><br>
                                    Bapak/Ibu Guru, staf, serta anak-anakku yang saya cintai, pertama-tama marilah kita
                                    panjatkan puji dan syukur ke hadirat Allah SWT atas nikmat sehat sehingga kita bisa
                                    berkumpul bersama pada hari ini. Pada kesempatan ini, saya ingin menyampaikan
                                    apresiasi yang luar biasa atas semangat dan dedikasi seluruh warga sekolah, karena
                                    kebersamaan dan kerja sama inilah yang menjadi kunci utama kejayaan serta kemajuan
                                    sekolah kita. Oleh karena itu, mari kita terus tingkatkan semangat belajar,
                                    berkarya, dan berinovasi, sembari selalu menjaga nama baik sekolah dan saling
                                    mendukung satu sama lain. Semoga acara hari ini berjalan dengan lancar serta
                                    memberikan manfaat yang besar bagi kita semua, terima kasih.
                                    Wassalamu’alaikum Warahmatullahi Wabarakatuh.
                                </p>
                            </div>

                            <b>Kepala Sekolah</b>
                            <p>Drs. BAMBANG SETIYONO, S.T., M.Pd.</p>

                        </figure>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center activity-heading">
                        <span>Kegiatan terbaru</span> <a href="">Lihat semua kegiatan-></a>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4 g-3">
                            <div class="col">
                                <div class="card h-100">
                                <img src="img/tumpeng.png" class="card-img-top activity-image" alt="Prosesi pemotongan tumpeng di sekolah">
                                <div class="card-body">
                                    <p class="card-text">Momen prosesi pemotongan tumpeng secara simbolis oleh jajaran
                                        pimpinan sekolah sebagai bentuk rasa syukur dalam sebuah acara perayaan.</p>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                <img src="img/upacara.png" class="card-img-top activity-image" alt="Kegiatan upacara bendera di sekolah">
                                <div class="card-body">
                                    <p class="card-text">Pelaksanaan upacara bendera di lapangan sekolah yang diwarnai
                                        dengan prosesi penyematan atribut atau penghargaan kepada perwakilan siswa.</p>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                <img src="img/Gemini_Generated_Image_6mnz826mnz826mnz.jpg" class="card-img-top activity-image" alt="Kegiatan peninjauan makanan di sekolah">
                                <div class="card-body">
                                    <p class="card-text">Kepala sekolah bersama tamu undangan dan pihak terkait saat
                                        meninjau kesiapan tumpukan katering makanan di selasar gedung sekolah.</p>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                <img src="img/BKK.jpg" class="card-img-top activity-image" alt="Siswa mengikuti kegiatan bersama di sekolah">
                                <div class="card-body">
                                    <p class="card-text">Suasana pemandangan dari atas yang memperlihatkan para siswa
                                        berkumpul dan duduk rapi mengikuti rangkaian kegiatan bersama di area sekolah.
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <ul class="list-group">
                    <li class="list-group-item bg-body-secondary text-primary">
                        <img src="icon/business.png" alt="" width="28">
                        <strong>Pengumuman Terbaru</strong>
                    </li>
                    <li class="list-group-item">
                        <a href="#"
                            class="list-group-item-action d-flex justify-content-start align-items-center announcement-link">
                            <img src="icon/google-docs.png" alt="" width="28" height="28"
                                class="me-2">
                            <div class="me-auto">
                                <strong>Pendaftaran Peserta didik tahun ajaran 2026/2027</strong><br>
                                <small class="text-muted">20 Mar 2025</small>
                            </div>
                            <span>&gt;</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"
                            class="list-group-item-action d-flex justify-content-start align-items-center announcement-link">
                            <img src="icon/google-docs.png" alt="" width="28" height="28"
                                class="me-2">
                            <div class="me-auto">
                                <strong>Jadwal Ujian Semester Genap Tahun Ajaran 2024/2025</strong><br>
                                <small class="text-muted">20 Mar 2025</small>
                            </div>
                            <span>&gt;</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"
                            class="list-group-item-action d-flex justify-content-start align-items-center announcement-link">
                            <img src="icon/google-docs.png" alt="" width="28" height="28"
                                class="me-2">
                            <div class="me-auto">
                                <strong>Informasi Libur Idul Fitri 1446 H</strong><br>
                                <small class="text-muted">20 Mar 2025</small>
                            </div>
                            <span>&gt;</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"
                            class="list-group-item-action d-flex justify-content-start align-items-center announcement-link">
                            <img src="icon/google-docs.png" alt="" width="28" height="28"
                                class="me-2">
                            <div class="me-auto">
                                <strong>Pengumuman Kelulusan Kelas XII</strong><br>
                                <small class="text-muted">20 Mar 2025</small>
                            </div>
                            <span>&gt;</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"
                            class="list-group-item-action d-flex justify-content-start align-items-center announcement-link">
                            <img src="icon/google-docs.png" alt="" width="28" height="28"
                                class="me-2">
                            <div class="me-auto">
                                <strong>Kegiatan Bakti Sosial Sekolah</strong><br>
                                <small class="text-muted">20 Mar 2025</small>
                            </div>
                            <span>&gt;</span>
                        </a>
                    </li>

                    <button type="button" class="btn btn-primary w-100">Lihat Semua Pengumuman -&gt;</button>
                </ul>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-2 mb-md-0">SMK PGRI WLINGI</div>
                <div class="col-12 col-md-4 mb-2 mb-md-0">Website ini dikembangkan oleh Anif</div>
                <div class="col-12 col-md-4">&copy;2026 SMK PGRI Wlingi</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
