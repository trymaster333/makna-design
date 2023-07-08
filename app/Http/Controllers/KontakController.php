<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.kontak.index');
    }
    public function kontakData(Request $request)
    {
        if ($request->ajax()) {
            $data = Kontak::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="kontak/edit/' . $row['id'] . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('kontak.destroy', $row->id) . '" method="POST">' .
                        csrf_field() . '' . method_field("DELETE") . '
                        <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Yakin ingin menghapus?\')">Delete</button>
                    </form>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['icon', 'action'])
                ->make(true);
        }

        return view('admin.kontak.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kontak.add');
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
        $data = new Kontak(); // Replace with your actual model name

        // Insert other form data
        $data->judul = $request->input('judul');
        $data->kontak = $request->input('kontak');
        $data->link = $request->input('link');
        // Add more columns as needed

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data->icon = $imagePath;
        } else {
            $data->icon = 'images/placehold.jpg';
        }

        $data->save();

        return redirect()->route('kontak')->with('success', 'Data berhasil ditambah.');
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
        $data = Kontak::find($id); // Replace with your actual model name and primary key column name

        return view('admin.kontak.edit', compact('data'));
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
        $data = Kontak::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul'); // Replace column1 with your actual column names
        $data->kontak = $request->input('kontak');
        $data->link = $request->input('link');
        // Add more columns as needed

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data->icon = $imagePath;
        }

        $data->save();

        return redirect()->route('kontak')->with('success', 'Data berhasil diubah.');
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
        $data = Kontak::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('kontak')->with('success', 'Data dihapus.');
    }
}
