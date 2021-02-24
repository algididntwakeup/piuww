@extends('layouts.master')
@section('content')
    <!-- slider section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="assets/images/slider_image.png"
                    class="w-100">

            </div>
            <div class="carousel-item">

                <img src="assets/images/slider_image.png"
                    class="w-100">

            </div>
            <div class="carousel-item">

                <img src="assets/images/slider_image.png"
                    class="w-100">

            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slider section -->

    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <!-- berita section -->
                    <div class="col-md-12 mb-3">
                        <h4><i class="fas fa-book-open"></i> BERITA TERBARU</h4>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                            </div>
                        </div>
                    </div>
                    <!-- end berita section -->

                    <!-- foto section -->
                    <div class="col-md-12 mb-3 mt-4">
                        <h4><i class="fas fa-images"></i> FOTO TERBARU</h4>
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- send foto section -->

                    <!-- video section -->
                    <div class="col-md-12 mb-3 mt-4">
                        <h4><i class="fas fa-video"></i> VIDEO TERBARU</h4>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <div class="card-img">
                                <img src="assets/images/post_image.png"
                                    class="w-100"
                                    style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                            </div>
                            <div class="card-body">
                                <a href="http://" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- end video section -->

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
