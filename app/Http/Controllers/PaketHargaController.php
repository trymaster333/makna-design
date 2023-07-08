<?php

namespace App\Http\Controllers;

use App\Models\PaketHarga;
use Illuminate\Http\Request;
use DataTables;

class PaketHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.paket-harga.index');
    }

    public function pakethargaData(Request $request)
    {
        if ($request->ajax()) {
            $data = PaketHarga::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('harga', function ($row) {
                    $harga = "Rp " . number_format($row->harga, 2, ',', '.') . '' . $row->satuan;
                    return $harga;
                })
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="' . route('paket-harga.edit', $row->id) . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('paket-harga.destroy', $row->id) . '" method="POST">' .
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

        return view('admin.portofolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.paket-harga.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new PaketHarga(); // Replace with your actual model name

        // Insert other form data
        $data->judul = $request->input('judul');
        $harga = preg_replace('/[^0-9]/', '', $request->input('harga'));
        $data->harga = $harga;

        $data->satuan = $request->input('satuan');
        $data->deskripsi = $request->input('deskripsi');

        $data->save();

        return redirect()->route('paket-harga')->with('success', 'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = PaketHarga::find($id); // Replace with your actual model name and primary key column name

        return view('admin.paket-harga.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = PaketHarga::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul');
        $harga = preg_replace('/[^0-9]/', '', $request->input('harga'));
        $data->harga = $harga;
        $data->satuan = $request->input('satuan');
        $data->deskripsi = $request->input('deskripsi');

        $data->save();

        return redirect()->route('paket-harga')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = PaketHarga::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('paket-harga')->with('success', 'Data dihapus.');
    }
}