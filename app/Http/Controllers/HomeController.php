<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use App\Models\Kontak;
use App\Models\PaketHarga;
use App\Models\Portofolio;
use App\Models\Review;
use App\Models\DaftarProyek;
use App\Models\KonsepDesain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $about = About::first();
        $paket_harga = PaketHarga::orderBy('harga', 'asc')->get();
        //$portofolio = Portofolio::orderBy('id', 'desc')->get();
        $portofolios = Portofolio::orderBy('id', 'desc')->get()->map(function($portofolio) {
            $portofolio->deskripsi = str_replace('&nbsp;', '', $portofolio->deskripsi);
            $portofolio->deskripsi = strip_tags($portofolio->deskripsi);
            return $portofolio;
          });

        $review = Review::orderBy('id', 'desc')->limit(10)->get();
        $faq = Faq::orderBy('id', 'asc')->limit(5)->get();
        $kontak = Kontak::orderBy('id', 'asc')->get();
        $projek_sekarang = DaftarProyek::where('status', 0)->orderBy('id', 'desc')->limit(10)->get();
        $projek_lalu = DaftarProyek::where('status', 1)->orderBy('id', 'desc')->limit(10)->get();
        $konsep_desain = KonsepDesain::orderBy('id', 'desc')->get();

        return view('home', [
            'title' => 'Makna Design - Jasa Desain Bangunan',
            'about' => $about,
            'portofolio' => $portofolios,
            'paket_harga' => $paket_harga,
            'review' => $review,
            'faq' => $faq,
            'kontak' => $kontak,
            'projek_sekarang' => $projek_sekarang,
            'projek_lalu' => $projek_lalu,
            'konsep_desain' => $konsep_desain,
        ]);
    }
    public function portofolio($id)
    {
        $data = Portofolio::find($id); // Replace with your actual model name and primary key column name
        $about = About::first();

        return view('portofolio-details', compact('data'))->with(['title' => 'Makna Design - Portofolio', 'about' => $about]);
    }

    public function daftarproyek($id)
    {
        $data = DaftarProyek::find($id); // Replace with your actual model name and primary key column name
        $about = About::first();

        return view('daftar-proyek', compact('data'))->with(['title' => 'Makna Design - Detail Proyek', 'about' => $about]);
    }
}