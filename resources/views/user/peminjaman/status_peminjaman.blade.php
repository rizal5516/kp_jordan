@extends('user.user_master')
@section('user')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Peminjaman /</span> Status Peminjaman</h4>
    <!-- Tabel Pemohon -->
    <div class="card">
        <h5 class="card-header">Status Peminjaman</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Keperluan</th>
                            <th>Ruangan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Persetujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                            </td>
                            <td>Jordanoid</td>
                            <td>21120120140140</td>
                            <td>Acara Angkatan</td>
                            <td>A101</td>
                            <td>09:00</td>
                            <td>15:00</td>
                            <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Tabel Pemohon -->
</div>

@endsection