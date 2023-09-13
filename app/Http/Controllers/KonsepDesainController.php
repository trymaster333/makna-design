<?php

namespace App\Http\Controllers;

use App\Models\KonsepDesain;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class KonsepDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.konsep-desain.index');
    }

    public function konsepdesainData(Request $request)
    {
        if ($request->ajax()) {
            $data = KonsepDesain::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="konsep-desain/edit/' . $row['id'] . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('konsep-desain.destroy', $row->id) . '" method="POST">' .
                        csrf_field() . '' . method_field("DELETE") . '
                        <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Yakin ingin menghapus?\')">Delete</button>
                    </form>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['cover','action'])
                ->make(true);
        }

        return view('admin.konsep-desain.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.konsep-desain.add');

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
        //
        $data = new KonsepDesain(); // Replace with your actual model name

        // Insert other form data
        $data->judul = $request->input('judul');
        // Add more columns as needed

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data->cover = $imagePath;
        } else {
            $data->cover = 'images/placehold.jpg';
        }

        $data->save();

        return redirect()->route('konsep-desain')->with('success', 'Data berhasil ditambah.');
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
        $data = KonsepDesain::find($id); // Replace with your actual model name and primary key column name

        return view('admin.konsep-desain.edit', compact('data'));
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
        $data = KonsepDesain::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul');
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

        return redirect()->route('konsep-desain')->with('success', 'Data berhasil diubah.');
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
        $data = KonsepDesain::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('konsep-desain')->with('success', 'Data dihapus.');
    }
}
