<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = About::all(); // Replace with your actual model name

        return view('admin.about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = $request->all();

        About::create($data);

        return redirect()->back()->with('success', 'Data berhasil diubah.');
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
        $data = About::find($id); // Replace with your actual model name and primary key column name

        return view('admin.about.edit', compact('data'));
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
        $data = About::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->judul = $request->input('judul'); // Replace column1 with your actual column names
        $data->slogan = $request->input('slogan');
        $data->deskripsi = $request->input('deskripsi');
        // Add more columns as needed

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data->image = $imagePath;
        }

        $data->save();

        return redirect()->route('about')->with('success', 'Data berhasil diubah.');
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
    }
}