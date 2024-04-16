@extends('layouts.app')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5" style="margin-top: 5rem; margin-bottom: -80px">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12">
                    <div class="card p-3 shadow">
                        <h3 class="text-primary">Hasil Checkout</h3>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered mt-3 text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Arman</td>
                                        <td>20-Juni-2025</td>
                                        <td>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-primary btn-sm text-white"><i class="fas fa-eye"></i> lihat</a>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-danger btn-sm"><i class="fas fa-trash"></i> hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Arman</td>
                                        <td>20-Juni-2025</td>
                                        <td>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-primary btn-sm text-white"><i class="fas fa-eye"></i> lihat</a>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-danger btn-sm"><i class="fas fa-trash"></i> hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Arman</td>
                                        <td>20-Juni-2025</td>
                                        <td>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-primary btn-sm text-white"><i class="fas fa-eye"></i> lihat</a>
                                            <a href="" style="width: 5rem" class="mb-1 btn btn-danger btn-sm"><i class="fas fa-trash"></i> hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  