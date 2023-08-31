<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanRuangan;
use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class PeminjamanRuanganController extends Controller
{
    public function adminPemohon()
    {
        $data_peminjaman = PeminjamanRuangan::latest()->get();


        return view('admin.pemohon.pemohon', compact('data_peminjaman'));
    }

    public function adminPeminjaman()
    {
        $ruanganData = Ruangan::all();

        return view('admin.peminjaman.peminjaman', compact('ruanganData'));
    }

    public function adminStorePeminjaman(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'keperluan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruangan_id' => 'required',
        ]);

        PeminjamanRuangan::insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'keperluan' => $request->keperluan,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'user_id' => auth()->user()->id,
            'ruangan_id' => $request->ruangan_id,
        ]);

        toastr()->success('Data Peminjaman Ruangan Berhasil di Input');

        return Redirect::route('admin.pemohon');
    }

    public function approvalPeminjaman($id)
    {
        $item = PeminjamanRuangan::findOrFail($id);

        if ($item->status == '0') {
            $item->status = '1';
            $item->save();
        }

        toastr()->success('Data Peminjaman Sudah di Setujui');

        return Redirect::back();
    }

    public function adminDeletePeminjaman($id)
    {
        $data_peminjaman = PeminjamanRuangan::findOrFail($id);

        $data_peminjaman->delete();

        toastr()->success('Data Peminjaman Ruangan Berhasil di Hapus');

        return Redirect::back();
    }

    public function userPeminjaman()
    {
        $ruanganData = Ruangan::all();

        return view('user.peminjaman.peminjaman', compact('ruanganData'));
    }

    public function userStorePeminjaman(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'keperluan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruangan_id' => 'required',
        ]);

        PeminjamanRuangan::insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'keperluan' => $request->keperluan,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'user_id' => auth()->user()->id,
            'ruangan_id' => $request->ruangan_id,
        ]);

        return Redirect::route('user.status-peminjaman');
    }

    public function statusPeminjaman()
    {
        $user_id = auth()->user()->id;
        $data_peminjaman = PeminjamanRuangan::where('user_id', $user_id)->latest()->get();

        return view('user.peminjaman.status_peminjaman', compact('data_peminjaman'));
    }
}
