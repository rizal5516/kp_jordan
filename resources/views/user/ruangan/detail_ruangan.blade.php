@extends('user.user_master')
@section('user')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ruangan /</span> Details Ruangan
        {{ $ruangan->nama_ruangan }}
    </h4>

    <a href="{{ route('user.ruangan') }}" class="btn btn-danger mb-4"><i class='bx bx-arrow-back'></i> Back</a>
    <div class="col-md-12 col-lg-12 mx-auto text-center">
        <div class="card mb-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Kursi : <span>{{ $ruangan->kursi }}</span>
                </li>
                <li class="list-group-item">Smart TV : <span>{{ $ruangan->kursi }}</span></li>
                <li class="list-group-item">Layar Proyektor : <span>{{ $ruangan->layar_proyektor }}</span></li>
                <li class="list-group-item">LCD Proyektor : <span>{{ $ruangan->lcd_proyektor }}</span></li>
                <li class="list-group-item">AC : <span>{{ $ruangan->ac }}</span></li>
                <li class="list-group-item">Papan Tulis : <span>{{ $ruangan->papan_tulis }}</span></li>
                <li class="list-group-item">Kapasitas : <span>{{ $ruangan->kapasitas }}</span></li>
            </ul>
        </div>
    </div>
</div>

@endsection