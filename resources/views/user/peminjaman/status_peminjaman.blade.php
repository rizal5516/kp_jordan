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
                        @foreach ($data_peminjaman as $item)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->id }}</strong>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->keperluan }}</td>
                            <td>{{ $item['ruangan']['nama_ruangan'] }}</td>
                            <td>{{ $item->jam_mulai }}</td>
                            <td>{{ $item->jam_selesai }}</td>
                            <td>
                                @if ($item->status == '1')
                                <span class="badge bg-label-success me-1">Approved</span>
                                @else
                                <span class="badge bg-label-warning me-1">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Tabel Pemohon -->
</div>

@endsection