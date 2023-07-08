<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use App\Models\Kontak;
use App\Models\PaketHarga;
use App\Models\Portofolio;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $about = About::first();
        $paket_harga = PaketHarga::orderBy('harga', 'asc')->get();
        $portofolio = Portofolio::orderBy('id', 'desc')->get();
        $review = Review::orderBy('id', 'desc')->limit(10)->get();
        $faq = Faq::orderBy('id', 'asc')->limit(5)->get();
        $kontak = Kontak::orderBy('id', 'asc')->get();

        return view('home', [
            'title' => 'Makna Design - Jasa Desain Bangunan',
            'about' => $about,
            'portofolio' => $portofolio,
            'paket_harga' => $paket_harga,
            'review' => $review,
            'faq' => $faq,
            'kontak' => $kontak,
        ]);
    }
    public function portofolio($id)
    {
        $data = Portofolio::find($id); // Replace with your actual model name and primary key column name
        $about = About::first();

        return view('portofolio-details', compact('data'))->with(['title' => 'Makna Design - Portofolio', 'about' => $about]);
    }
}