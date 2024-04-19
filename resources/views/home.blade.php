@extends('layouts.app')
@section('content')
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
        {{-- <form action="" method="post"> --}}
        <div class="card p-4 shadow">
            <div class="row" id="form-pencarian-tiket">
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
                    <button class="btn btn-primary bg-primary mt-2 form-control text-white" onclick="searchTiket()"
                        id="search-tiket"><i class="fas fa-search me-1"></i> Search</button>
                    <button style="display: none" onclick="resetTiket()"
                        class="btn btn-primary bg-danger mt-2 form-control text-white" onclick="searchTiket()"
                        id="reset-tiket"><i class="fas fa-times me-1"></i> Reset</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="invoice" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Chcekout</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card p-3 shadow-lg">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2 text-center mb-3">
                                                <img src="{{ asset('img/logo.jpg') }}" style="width: 60px; height: 60px;"
                                                    alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mt-1">Tunas Naimbaru Naposo Bulung Parmalim</h6>
                                                <p style="margin-top: -8px; font-size: 13px">Admin Penjulan Tiket</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <p style="font-size: 13px" class="mt-1">Jln. Poros Majene</p>
                                                <p style="font-size: 13px; margin-top: -17px">arman@gmail.com</p>
                                                <p style="font-size: 13px; margin-top: -17px">+6282290762799</p>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 1px">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <h2 class="text-center">INVOICE</h2>
                                                <P style="margin-top: -10px">No.1234</P>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <h6>Nama Pembeli:</h6>
                                                        <h6 style="margin-top: -5px">Arman</h6>
                                                        <p style="margin-top: -8px;">arman@gmail.com</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h6>Tanggal</h6>
                                                        <p style="margin-top: -5px;">20 Agustus 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{ asset('img/tiket.png') }}" class="form-control" alt="">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <h6>Info Pembayaran</h6>
                                                <p style="margin-top: -2px; font-size: 13px">Nama Bank: BNI</p>
                                                <p style="margin-top: -20px; font-size: 13px">Nama Rekening: Andi</p>
                                                <p style="margin-top: -20px; font-size: 13px">No. Rekening: 123456</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Harga: Rp. 1.000.000</h6>
                                                <h6>Biaya Admin: Rp. 50.000</h6>
                                                <h6>Total: Rp. 1.050.000</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-2">Terimakasih</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary text-white">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="biodata-pembeli"></div>
        </div>
        {{-- </form> --}}
    </div>
    <!-- Hero End -->
@endsection
@section('scripts')
    <script>
        function searchTiket() {
            document.getElementById('search-tiket').style.display = "none"
            document.getElementById('reset-tiket').style.display = "block"
            document.getElementById('biodata-pembeli').innerHTML = `
                <div class="row mt-3">
                    <h3>Biodata Pembeli</h3>
                    <div class="col-md-6 mb-3">
                        <label for="nama-lengkap" class="mb-2">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama-lengkap" id="nama-lengkap">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="no-hp" class="mb-2">Nomor Handphone</label>
                        <input type="number" class="form-control" name="no-hp" id="no-hp">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>  
                    <div class="col-md-6 mb-3">
                        <label for="harga" class="mb-2">Harga Tiket</label>
                        <input type="number" id="harga" name="harga" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="foto-etiket" class="mb-2">Upload Foto E-Tiket</label>
                        <input type="file" id="foto-etiket" name="foto-etiket" class="form-control">
                    </div>
                    <div class="col-md-3 mt-4">
                        <button data-bs-toggle="modal" data-bs-target="#invoice" class="btn btn-primary mt-2 text-white"><i class="fas fa-plane"></i> Checkout</button>
                    </div>
                </div>
            `
        }

        function resetTiket() {
            document.getElementById('search-tiket').style.display = "block"
            document.getElementById('reset-tiket').style.display = "none"
            document.getElementById('biodata-pembeli').innerHTML = ""
        }
    </script>
@endsection
