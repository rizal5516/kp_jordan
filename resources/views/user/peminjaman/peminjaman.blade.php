@extends('user.user_master')
@section('user')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Peminjaman /</span> Tambah Peminjam</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Peminjam</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.store-peminjaman') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="keperluan">Keperluan</label>
                            <input type="text" class="form-control" id="keperluan" name="keperluan" />
                        </div>
                        <div class="mb-3">
                            <label for="ruangan_id" class="form-label">Pilih Ruangan</label>
                            <select id="ruangan_id" name="ruangan_id" class="form-select">
                                @foreach ($ruanganData as $ruangan)
                                <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="datetime-local" class="form-control" id="jam_mulai" name="jam_mulai">
                        </div>
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="datetime-local" class="form-control" id="jam_selesai" name="jam_selesai">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection