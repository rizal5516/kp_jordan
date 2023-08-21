@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ruangan /</span> Daftar Ruangan</h4>

    <!-- Examples -->
    <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">A101</h5>
                    <a href="{{ route('ruangan.edit') }}" class="btn btn-outline-info"><i
                            class='bx bx-edit-alt'></i></a>
                    <a href="#" class="btn btn-outline-danger"><i class='bx bx-trash'></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">A102</h5>
                    <a href="#" class="btn btn-outline-info"><i class='bx bx-edit-alt'></i></a>
                    <a href="#" class="btn btn-outline-danger"><i class='bx bx-trash'></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Lab Multimedia</h5>
                    <a href="#" class="btn btn-outline-info"><i class='bx bx-edit-alt'></i></a>
                    <a href="#" class="btn btn-outline-danger"><i class='bx bx-trash'></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Examples -->
</div>

@endsection