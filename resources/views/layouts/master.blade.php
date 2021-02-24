<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Home Sekolah</title>
</head>

<body style="background:#e2e8f0">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="border-top: 5px solid rgb(175, 140, 226);">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="fa fa-graduation-cap" aria-hidden="true"></i> SMK INDONESIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="berita"><i class="fa fa-book-open" aria-hidden="true"></i> BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agenda"><i class="fa fa-calendar" aria-hidden="true"></i> AGENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri"><i class="fa fa-image" aria-hidden="true"></i> GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="video"><i class="fa fa-video" aria-hidden="true"></i> VIDEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak"><i class="fa fa-phone" aria-hidden="true"></i> KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container-fluid" style="background: white;">
            <div class="row p-4">
                <div class="col-md-4">
                    <h5>TENTANG</h5>
                    <hr>
                    <p>
                        This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position.
                    </p>

                </div>
                <div class="col-md-4">
                    <h5>TAGS</h5>
                    <hr>
                    <button class="btn btn-sm btn-outline-secondary mb-2">ISLAM</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">BUDAYA</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">OSIS</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">KEGIATAN</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">KERJA BAKTI</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">PENGUMUMAN</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">INFO</button>
                    <button class="btn btn-sm btn-outline-secondary mb-2">PRAMUKA</button>
                </div>
                <div class="col-md-4">
                    <h5>KONTAK</h5>
                    <hr>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> This example is a quick exercise to illustrate how the top-aligned navbar works

                        <i class="fas fa-phone"></i> +628777-993-0393
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="row p-3">
                <div class="text-center text-white font-weight-bold">
                    Copyright Â© 2020 SMK INDONESIA. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
