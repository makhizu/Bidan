<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menuPasien()
    {
        return view('menu.menu_pasien', [
            "dropdown" => "Pasien",
            "title" => "Pasien"
        ]);
    }

    public function menuObat()
    {
        return view('menu.menu_obat', [
            "dropdown" => "Obat",
            "title" => "Obat"
        ]);
    }

    public function menuDatamaster()
    {
        return view('menu.menu_datamaster', [
            "dropdown" => "Data Master",
            "title" => "Data Master"
        ]);
    }

    public function menuPelayanan()
    {
        return view('menu.menu_pelayanan', [
            "dropdown" => "Pelayanan",
            "title" => "Pelayanan"
        ]);
    }
}
