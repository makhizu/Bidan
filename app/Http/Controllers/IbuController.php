<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibu;

class IbuController extends Controller
{
    public function index()
    {
        return view('pasien.data_ibu', [
            "dropdown" => "Pasien",
            "title" => "Data Ibu",
            "Ibu" => Ibu::all()
        ]);
    }

    public function show(Ibu $d_ibu)
    {
        // @dd($d_ibu);
        return view('pasien.detail.detail_ibu', [
            "dropdown" => "Pasien",
            "title" => "Detail Ibu",
            "Ibu" => $d_ibu
        ]);
    }

    public function cari($NIK)
    {
        // @dd($d_ibu);
        return view('pasien.detail.detail_ibu', [
            "dropdown" => "Pasien",
            "title" => "Detail Ibu",
            "Ibu" => $NIK
        ]);
    }

    public function formIbu()
    {
        // @dd($d_ibu);
        return view('pasien.form_ibu', [
            "dropdown" => "Pasien",
            "title" => "Form Ibu",
        ]);
    }
}
