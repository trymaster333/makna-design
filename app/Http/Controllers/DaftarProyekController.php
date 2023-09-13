<?php

namespace App\Http\Controllers;

use App\Models\DaftarProyek;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class DaftarProyekController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.daftar-proyek.index');
    }

    public function daftarproyekData(Request $request)
    {
        if ($request->ajax()) {
            $data = DaftarProyek::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('luas', function ($row) {
                    
                    $luas = $row['luas_tanah']."m2 / ".$row['luas_bangunan']."m2";
                    return $luas;
                })
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="daftar-proyek/edit/' . $row['id'] . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('daftar-proyek.destroy', $row->id) . '" method="POST">' .
                        csrf_field() . '' . method_field("DELETE") . '
                        <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Yakin ingin menghapus?\')">Delete</button>
                    </form>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.daftar-proyek.index');
    }

    public function create()
    {
        //
        return view('admin.daftar-proyek.add');
    }

    public function store(Request $request)
    {
        //
        $data = new DaftarProyek(); // Replace with your actual model name

        // Insert other form data
        $data->judul = $request->input('judul');
        $data->anggaran = $request->input('anggaran');
        $data->luas_tanah = $request->input('luas_tanah');
        $data->luas_bangunan = $request->input('luas_bangunan');
        $data->tipe = $request->input('tipe');
        $data->jenis = $request->input('jenis');
        $data->lokasi = $request->input('lokasi');
        $data->tanggal = $request->input('tanggal');
        $data->keterangan = $request->input('keterangan');
        $data->status = $request->input('status');
        // Add more columns as needed
        if ($request->hasFile('data_penunjang')) {
            $filePath = $request->file('data_penunjang')->store('images', 'public');
    
            $data->data_penunjang = $filePath;
            $data->nama_file = $request->file('data_penunjang')->getClientOriginalName();
        }

        $data->save();

        return redirect()->route('daftar-proyek')->with('success', 'Data berhasil ditambah.');
    }

    public function edit($id)
    {
        //
        $data = DaftarProyek::find($id); // Replace with your actual model name and primary key column name

        return view('admin.daftar-proyek.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
        $data = DaftarProyek::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul');
        $data->anggaran = $request->input('anggaran');
        $data->luas_tanah = $request->input('luas_tanah');
        $data->luas_bangunan = $request->input('luas_bangunan');
        $data->tipe = $request->input('tipe');
        $data->jenis = $request->input('jenis');
        $data->lokasi = $request->input('lokasi');
        $data->tanggal = $request->input('tanggal');
        $data->keterangan = $request->input('keterangan');
        $data->status = $request->input('status');
        // Add more columns as needed
        if ($request->hasFile('data_penunjang')) {
            $filePath = $request->file('data_penunjang')->store('images', 'public');
    
            $data->data_penunjang = $filePath;
            $data->nama_file = $request->file('data_penunjang')->getClientOriginalName();
        }

        $data->save();

        return redirect()->route('daftar-proyek')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        //
        $data = DaftarProyek::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('daftar-proyek')->with('success', 'Data dihapus.');
    }
}