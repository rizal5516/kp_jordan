@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ruangan /</span> Tambah Ruangan</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Ruangan</h5>
                </div>
                <div class="card-body">
                    <form method="" action="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="nama_ruangan">Nama Ruangan</label>
                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" />
                        </div>
                        <div class="mb-3">
                            <label for="jenis_ruangan" class="form-label">Jenis Ruangan</label>
                            <select id="jenis_ruangan" name="jenis_ruangan" class="form-select">
                                <option value="1">Ruang Kelas</option>
                                <option value="2">Ruang Laboratorium</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar_ruangan" class="form-label">Gambar Ruangan</label>
                            <input class="form-control" type="file" id="gambar_ruangan" name="gambar_ruangan" />
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection