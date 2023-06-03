<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnakController extends Controller
{
    public function index()
    {
        return view('pasien.data_anak', [
            "dropdown" => "Pasien",
            "title" => "Data Anak",
            "Anak" => Ibu::all()
        ]);
    }
}
