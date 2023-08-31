<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\Redirect;

class AdminRuanganController extends Controller
{
    public function ruangan()
    {
        $ruangans = Ruangan::latest()->get();

        return view('admin.ruangan.ruangan', compact('ruangans'));
    }

    public function detailRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        return view('admin.ruangan.detail_ruangan', compact('ruangan'));
    }

    public function addRuangan()
    {
        return view('admin.ruangan.add_ruangan');
    }

    public function storeRuangan(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'jenis_ruangan' => 'required',
            'kursi' => 'required',
            'smart_tv' => 'required',
            'layar_proyektor' => 'required',
            'lcd_proyektor' => 'required',
            'ac' => 'required',
            'papan_tulis' => 'required',
            'kapasitas' => 'required',
            'image_ruangan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000'
        ]);

        $path = public_path('assets/upload/');
        !is_dir($path) && mkdir($path, 0777, true);

        $imageName = null; // Inisialisasi nama gambar dengan null

        if ($request->hasFile('image_ruangan')) {
            $imageName = time() . '.' . $request->image_ruangan->extension();
            ResizeImage::make($request->file('image_ruangan'))
                ->resize(1200, 1200)
                ->save($path . $imageName);
        }

        Ruangan::insert([
            'nama_ruangan' => $request->nama_ruangan,
            'jenis_ruangan' => $request->jenis_ruangan,
            'image_ruangan' => $imageName,
        ]);

        toastr()->success('Ruangan Berhasil di Tambah');

        return Redirect::route('admin.ruangan');
    }

    public function editRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        return view('admin.ruangan.edit_ruangan', compact('ruangan'));
    }

    public function updateRuangan(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_ruangan' => 'required',
            'jenis_ruangan' => 'required',
            'kursi' => 'required',
            'smart_tv' => 'required',
            'layar_proyektor' => 'required',
            'lcd_proyektor' => 'required',
            'ac' => 'required',
            'papan_tulis' => 'required',
            'kapasitas' => 'required',
            'image_ruangan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000'
        ]);

        $ruangan_id = $request->id;

        // Mengambil data ruangan yang akan diupdate
        $ruangan = Ruangan::findOrFail($ruangan_id);

        if ($request->hasFile('image_ruangan')) {
            // Menghapus gambar lama jika ada
            if ($ruangan->image_ruangan) {
                $oldImagePath = public_path('assets/upload/') . $ruangan->image_ruangan;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Mengupload gambar baru
            $path = public_path('assets/upload/');
            !is_dir($path) && mkdir($path, 0777, true);

            $imageName = time() . '.' . $request->image_ruangan->extension();
            ResizeImage::make($request->file('image_ruangan'))
                ->resize(1200, 1200)
                ->save($path . $imageName);

            $ruangan->update([
                'nama_ruangan' => $request->nama_ruangan,
                'jenis_ruangan' => $request->jenis_ruangan,
                'kursi' => $request->kursi,
                'smart_tv' => $request->smart_tv,
                'layar_proyektor' => $request->layar_proyektor,
                'lcd_proyektor' => $request->lcd_proyektor,
                'ac' => $request->ac,
                'papan_tulis' => $request->papan_tulis,
                'kapasitas' => $request->kapasitas,
                'image_ruangan' => $imageName,
            ]);
        } else {
            // Jika tidak ada gambar yang diunggah, hanya perbarui data teks
            $ruangan->update([
                'nama_ruangan' => $request->nama_ruangan,
                'jenis_ruangan' => $request->jenis_ruangan,
                'kursi' => $request->kursi,
                'smart_tv' => $request->smart_tv,
                'layar_proyektor' => $request->layar_proyektor,
                'lcd_proyektor' => $request->lcd_proyektor,
                'ac' => $request->ac,
                'papan_tulis' => $request->papan_tulis,
                'kapasitas' => $request->kapasitas,
            ]);
        }

        toastr()->success('Data Ruangan Berhasil di Update');

        return Redirect::route('admin.ruangan');
    }

    public function deleteRuangan($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        // Dapatkan nama file gambar yang terkait dengan ruangan
        $imageName = $ruangan->image_ruangan;

        // Hapus file gambar dari folder public
        if ($imageName) {
            $imagePath = public_path('assets/upload/' . $imageName);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $ruangan->delete();

        toastr()->success('Data Ruangan Berhasil di Hapus');

        return Redirect::back();
    }
}
