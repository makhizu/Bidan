<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function AllObat()
    {
        return view('obat.data_obat', [
            "dropdown" => "Obat",
            "title" => "Obat",
        ]);
    }

    public function AllVaksin()
    {
        return view('obat.data_vaksin', [
            "dropdown" => "Obat",
            "title" => "Vaksin",
        ]);
    }

    public function AllAkseptor()
    {
        return view('obat.data_akseptor', [
            "dropdown" => "Obat",
            "title" => "Akseptor",
        ]);
    }
}
