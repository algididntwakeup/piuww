@extends('layouts.master')
@section('content')
<header class="pt-5 border-bottom bg-light">
    <div class="container pt-md-1 pb-md-1">
        <h1 class="bd-title mt-4 font-weight-bold"><i class="fa fa-video" aria-hidden="true"></i> GALERI VIDEO
        </h1>
        <p class="bd-lead">Galeri Video terbaru tentang SMK Indonesia.</p>
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
            <a href="#" class="text-decoration-none"><i class="fa fa-video"></i>
                    Galeri Video</a>
        </li>
    </ol>
</nav>
<!-- end breadcrumb -->

<div class="container-fluid mt-3 mb-5">
    <div class="row">

        <div class="col-md-6 mb-4" v-for="video in videos" :key="video.id">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-img">
                    <img src="assets/images/post_image.png" style="width:100%;height:300px;border-top-left-radius:.3rem;border-top-right-radius:.3rem">
                </div>
                <div class="card-body text-center">
                    <h6>Judul Video</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4" v-for="video in videos" :key="video.id">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-img">
                    <img src="assets/images/post_image.png" style="width:100%;height:300px;border-top-left-radius:.3rem;border-top-right-radius:.3rem">
                </div>
                <div class="card-body text-center">
                    <h6>Judul Video</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4" v-for="video in videos" :key="video.id">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-img">
                    <img src="assets/images/post_image.png" style="width:100%;height:300px;border-top-left-radius:.3rem;border-top-right-radius:.3rem">
                </div>
                <div class="card-body text-center">
                    <h6>Judul Video</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4" v-for="video in videos" :key="video.id">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-img">
                    <img src="assets/images/post_image.png" style="width:100%;height:300px;border-top-left-radius:.3rem;border-top-right-radius:.3rem">
                </div>
                <div class="card-body text-center">
                    <h6>Judul Video</h6>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
