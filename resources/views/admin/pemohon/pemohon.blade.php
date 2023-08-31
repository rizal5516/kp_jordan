@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pemohon /</span> Table Pemohon</h4>
    <!-- Tabel Pemohon -->
    <div class="card">
        <h5 class="card-header">Pemohon</h5>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_peminjaman as $item)
                        @if ($item->status == '0')
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->id }}</strong>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->keperluan }}</td>
                            <td>{{ $item->ruangan->nama_ruangan }}</td>
                            <td>{{ $item->jam_mulai }}</td>
                            <td>{{ $item->jam_selesai }}</td>
                            <td>
                                @if ($item->status == '0')
                                <span class="badge bg-label-warning me-1">Pending</span>
                                @elseif ($item->status == '1')
                                <span class="badge bg-label-success me-1">Approved</span>
                                @endif
                            </td>
                            <td>
                                @if ($item->status == '0')
                                <a class="btn btn-outline-success"
                                    href="{{ route('admin.approve-peminjaman', $item->id ) }}"><i
                                        class='bx bx-check-circle'></i>
                                </a>
                                <a class="btn btn-outline-danger"
                                    href="{{ route('admin.delete-peminjaman', $item->id) }}"><i
                                        class='bx bx-x-circle'></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Tabel Pemohon -->

    <hr class="my-5" />

    <!-- Tabel Status Pemohon -->
    <div class="card">
        <h5 class="card-header">Status Pemohon</h5>
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
                        @if ($item->status == '1')
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
                            <td><span class="badge bg-label-success me-1">Approved</span></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Tabel Status Pemohon -->
</div>

@endsection