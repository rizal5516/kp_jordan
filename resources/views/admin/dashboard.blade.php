@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Peminjaman Ruangan
                                <br><span class="background-title-card">Jurusan
                                    Teknik Komputer</span>
                                <br>Universitas
                                Diponegoro
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="fw-bold">Ruangan</h3>
                            <div class="card-title">
                                <i class='bx bxs-buildings'></i>
                            </div>
                            <span><a href="#" class="btn btn-primary">Details<i class='bx bx-detail m-1'></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="fw-bold">Jadwal</h3>
                            <div class="card-title">
                                <i class='bx bxs-calendar'></i>
                            </div>
                            <span><a href="#" class="btn btn-primary">Details<i class='bx bx-detail m-1'></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="fw-bold">Pemohon</h3>
                            <div class="card-title">
                                <i class='bx bxs-id-card'></i>
                            </div>
                            <span><a href="#" class="btn btn-primary">Details<i class='bx bx-detail m-1'></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection