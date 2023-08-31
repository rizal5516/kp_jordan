@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ruangan /</span> Edit Ruangan</h4>

    <a href="{{ route('admin.ruangan') }}" class="btn btn-danger mb-4"><i class='bx bx-arrow-back'></i> Back</a>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Ruangan</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.ruangan-update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ruangan->id }}">
                        <div class="mb-3">
                            <label class="form-label" for="nama_ruangan">Nama Ruangan</label>
                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan"
                                value="{{ $ruangan->nama_ruangan }}" />
                        </div>
                        <div class="mb-3">
                            <label for="jenis_ruangan" class="form-label">Jenis Ruangan</label>
                            <select id="jenis_ruangan" name="jenis_ruangan" class="form-select">
                                <option value="{{ $ruangan->jenis_ruangan }}">Current Class Type : {{
                                    $ruangan->jenis_ruangan }}</option>
                                <option value="Ruang Kelas">Ruang Kelas</option>
                                <option value="Ruang Laboratorium">Ruang Laboratorium</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image_ruangan" class="form-label">Gambar Ruangan</label>
                            <input class="form-control" type="file" id="image_ruangan" name="image_ruangan" />
                        </div>
                        <div class="mb-3">
                            @if ($ruangan->image_ruangan)
                            <img class="card-img-top" src="{{ asset('assets/upload/'.$ruangan->image_ruangan) }}"
                                alt="Ruangan Image" style="max-width: 300px;" />
                            @else
                            <img class="card-img-top" src="{{ asset('assets/upload/no_image.jpg') }}" alt="No Image"
                                style="max-width: 300px;" />
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="kursi">Kursi</label>
                                    <input type="number" class="form-control" id="kursi" name="kursi"
                                        value="{{ $ruangan->kursi }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="smart_tv">Smart TV</label>
                                    <input type="number" class="form-control" id="smart_tv" name="smart_tv"
                                        value="{{ $ruangan->smart_tv }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="layar_proyektor">Layar Proyektor</label>
                                    <input type="number" class="form-control" id="layar_proyektor"
                                        name="layar_proyektor" value="{{ $ruangan->layar_proyektor }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="lcd_proyektor">LCD Proyektor</label>
                                    <input type="number" class="form-control" id="lcd_proyektor" name="lcd_proyektor"
                                        value="{{ $ruangan->lcd_proyektor }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="ac">AC</label>
                                    <input type="number" class="form-control" id="ac" name="ac"
                                        value="{{ $ruangan->ac }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="papan_tulis">Papan Tulis</label>
                                    <input type="number" class="form-control" id="papan_tulis" name="papan_tulis"
                                        value="{{ $ruangan->papan_tulis }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="kapasitas">Kapasitas</label>
                                    <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                                        value="{{ $ruangan->kapasitas }}" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection