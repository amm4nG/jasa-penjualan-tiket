@extends('layouts.app')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.navbar')

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Terpercaya</h4>
                    <h1 class="mb-5 display-3 text-primary">Temukan tiket eksklusif Anda di sini!</h1>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/hero-img-1.png" class="img-fluid w-100 h-100 bg-secondary rounded"
                                    alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/hero-img-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <form action="" method="post">
            <div class="card p-4 shadow">
                <div class="row">
                    <h3 class="mb-4 display-6 text-primary">Ayo Wujudkan Perjalanan Anda</h3>
                    <div class="col-md-3 mb-2">
                        <label for="dari" class="mb-2">Dari</label>
                        <input type="text" name="dari" id="dari" class="form-control">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tujuan" class="mb-2">Ke</label>
                        <input type="text" name="tujuan" id="tujuan" class="form-control">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="tanggal_pergi" class="mb-2">Tanggal Pergi</label>
                        <input type="date" name="tanggal_pergi" id="tanggal_pergi" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="tanggal_pulang" class="mb-2"><input type="checkbox" name="" id="">
                            Tanggal Pulang</label>
                        <input type="date" name="tanggal_pulang" id="tanggal_pulang" class="form-control">
                    </div>
                    <div class="col-md-2 mb-2 mt-4">
                        <button class="btn btn-primary bg-primary mt-2 form-control text-white"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Hero End -->
@endsection
