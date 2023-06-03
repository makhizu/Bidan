<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function AllImunisasi()
    {
        return view('pelayanan.data_imunisasi', [
            "dropdown" => "Pelayanan",
            "title" => "Imunisasi",
        ]);
    }

    public function AllKB()
    {
        return view('pelayanan.data_kb', [
            "dropdown" => "Pelayanan",
            "title" => "Keluarga Berencana",
        ]);
    }

    public function AllKehamilan()
    {
        return view('pelayanan.data_kehamilan', [
            "dropdown" => "Pelayanan",
            "title" => "Kehamilan",
        ]);
    }

    public function AllPersalinan()
    {
        return view('pelayanan.data_persalinan', [
            "dropdown" => "Pelayanan",
            "title" => "Persalinan",
        ]);
    }
}
