@extends('layouts.master')
@section('content')
<header class="pt-5 border-bottom bg-light">
    <div class="container pt-md-1 pb-md-1">
        <h1 class="bd-title mt-4 font-weight-bold"><i class="fa fa-bell" aria-hidden="true"></i> AGENDA
        </h1>
        <p class="bd-lead">Agenda terbaru tentang SMK Indonesia.</p>
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
    </ol>
</nav>
<!-- end breadcrumb -->

<div class="container-fluid mt-3 mb-5">
    <div class="row">

        <div class="col-md-6 mb-3" v-for="event in events" :key="event.id">
            <a href="detailagenda" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>Judul Agenda</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi Agenda
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 09-11-2020
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 mb-3" v-for="event in events" :key="event.id">
            <a href="detailagenda" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>Judul Agenda</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi Agenda
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 09-11-2020
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 mb-3" v-for="event in events" :key="event.id">
            <a href="detailagenda" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>Judul Agenda</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi Agenda
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 09-11-2020
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 mb-3" v-for="event in events" :key="event.id">
            <a href="detailagenda" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>Judul Agenda</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi Agenda
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 09-11-2020
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
