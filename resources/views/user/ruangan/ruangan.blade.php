@extends('user.user_master')
@section('user')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ruangan /</span> Daftar Ruangan</h4>

    <!-- Examples -->
    <div class="row mb-5">
        @foreach ($ruangans as $ruangan)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('assets/upload/'.$ruangan->image_ruangan) }}"
                    alt="Image Ruangan" />
                <div class="card-body">
                    <h5 class="card-title">{{ $ruangan->nama_ruangan }}</h5>
                    <a href="{{ route('user.detail-ruangan', $ruangan->id) }}" class="btn btn-outline-warning"><i
                            class='bx bx-detail'></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Examples -->
</div>

@endsection