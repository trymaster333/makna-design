<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    //
    public function index()
    {
        return view('admin.portofolio.index');
    }
    public function portoData(Request $request)
    {
        if ($request->ajax()) {
            $data = Portofolio::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('judul', function ($row) {
                    return '<a href="' . route('portofolio.edit', $row->id) . '">' . $row['judul'] . '</a>';
                })
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="' . route('portofolio.edit', $row->id) . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('portofolio.destroy', $row->id) . '" method="POST">' .
                        csrf_field() . '' . method_field("DELETE") . '
                        <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Yakin ingin menghapus?\')">Delete</button>
                    </form>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['judul', 'cover', 'action'])
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
        return view('admin.portofolio.add');
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
        $data = new Portofolio(); // Replace with your actual model name

        // Insert other form data
        $data->judul = $request->input('judul');
        $data->deskripsi = $request->input('deskripsi');
        // Add more columns as needed

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data->cover = $imagePath;
        } else {
            $data->cover = 'images/placehold.jpg';
        }

        $data->save();

        return redirect()->route('portofolio')->with('success', 'Data berhasil ditambah.');
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
        $data = Portofolio::find($id); // Replace with your actual model name and primary key column name

        return view('admin.portofolio.edit', compact('data'));
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
        $data = Portofolio::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul');
        $data->deskripsi = $request->input('deskripsi');
        // Add more columns as needed

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data->cover = $imagePath;
        }

        $data->save();

        return redirect()->route('portofolio')->with('success', 'Data berhasil diubah.');
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
        $data = Portofolio::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('portofolio')->with('success', 'Data dihapus.');
    }
}
