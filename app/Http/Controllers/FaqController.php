<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.faq.index');
    }
    public function faqData(Request $request)
    {
        if ($request->ajax()) {
            $data = Faq::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        //TOMBOL EDIT
                        '<div class="input-group">
                        <a href="' . route('faq.edit', $row->id) . '" class="btn btn-warning btn-sm mx-2">Edit</a>' .
                        //TOMBOL DELETE
                        '<form action="' . route('faq.destroy', $row->id) . '" method="POST">' .
                        csrf_field() . '' . method_field("DELETE") . '
                        <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Yakin ingin menghapus?\')">Delete</button>
                    </form>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['jawaban', 'action'])
                ->make(true);
        }

        return view('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.faq.add');
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
        $data = new Faq(); // Replace with your actual model name

        // Insert other form data
        $data->pertanyaan = $request->input('pertanyaan');
        $data->jawaban = $request->input('jawaban');
        // Add more columns as needed

        $data->save();

        return redirect()->route('faq')->with('success', 'Data berhasil ditambah.');
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
        $data = Faq::find($id); // Replace with your actual model name and primary key column name

        return view('admin.faq.edit', compact('data'));
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
        $data = Faq::find($id); // Replace with your actual model name and primary key column name

        // Update the data with the values from the form
        $data->pertanyaan = $request->input('pertanyaan');
        $data->jawaban = $request->input('jawaban');


        $data->save();

        return redirect()->route('faq')->with('success', 'Data berhasil diubah.');
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
        $data = Faq::findOrFail($id); // Replace with your actual model name
        $data->delete();

        return redirect()->route('faq')->with('success', 'Data dihapus.');
    }
}