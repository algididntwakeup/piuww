@extends('layouts.master')
@section('content')
<header class="pt-5 border-bottom bg-light">
    <div class="container pt-md-1 pb-md-1">
        <h1 class="bd-title mt-4 font-weight-bold"><i class="fa fa-bell" aria-hidden="true"></i> AGENDA
        </h1>
        <p class="bd-leadâ€ť>Agenda terbaru tentang SMK Indonesia. </p>
    </div>
</header>

    <!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a hre="#" class="text-decoration-none"><i class="fa fa-home"></i> Home
                </a>
        </li>
        <li class="breadcrumb-item">
            <a href="#" class="text-decoration-none"><i class="fa fa-bell"></i>
                    Agenda</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#" class="text-decoration-none">
                    Judul Agenda</a>
        </li>
    </ol>
</nav>
<!-- end breadcrumb -->

<div class="container-fluid mt-3 mb-5">
    <div class="row">

        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3>Judul Agenda</h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td style="width:20%">LOKASI</td>
                                    <td>
                                        Aula Sekolah
                                    </td>
                                </tr>
                                <tr>
                                    <td>TANGGAL</td>
                                    <td>
                                        20-juni-2020
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">

            <!-- agenda section -->
            <div class="title mb-4">
                <h4><i class="fa fa-calendar" aria-hidden="true"></i> AGENDA TERBARU</h4>
            </div>

            <div class="card mb-3 shadow-sm border-0">
                <div class="card-body">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                    <hr>
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Aula Sekolah
                    </div>
                    <div class="mt-2">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 20 Juli 2020
                    </div>
                </div>
            </div>

            <div class="card mb-3 shadow-sm border-0">
                <div class="card-body">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                    <hr>
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Aula Sekolah
                    </div>
                    <div class="mt-2">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 20 Juli 2020
                    </div>
                </div>
            </div>

            <div class="card mb-3 shadow-sm border-0">
                <div class="card-body">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                    <hr>
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Aula Sekolah
                    </div>
                    <div class="mt-2">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 20 Juli 2020
                    </div>
                </div>
            </div>

            <!-- end agenda section -->

            <!-- kategori section -->
            <div class="title mb-4 mt-5">
                <h4><i class="fa fa-folder" aria-hidden="true"></i> KATEGORI BERITA</h4>
            </div>

            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded"><i class="fa fa-folder-open" aria-hidden="true"></i> OSIS</a>


                <a href="" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded"><i class="fa fa-folder-open" aria-hidden="true"></i> PRAMUKA</a>


                <a href="" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded"><i class="fa fa-folder-open" aria-hidden="true"></i> BERITA</a>


                <a href="" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded"><i class="fa fa-folder-open" aria-hidden="true"></i> INFO</a>
            </div>
            <!-- end kategori section -->

        </div>

    </div>
</div>
@endsection
