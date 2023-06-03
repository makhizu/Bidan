<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu_
{
    private static $DataIbu = [
        [
            "NIK" => "139203948594",
            "Nama" => "Hayati Suhati",
            "Tanggal_Lahir" => "10 Desember 1989",
            "Alamat" => "Jln. Lebak Bulus No. 3",
            "Jumlah_Anak" => 3,
            "Nama_Suami" => "Rahmat"
        ],
        [
            "NIK" => "139834958594",
            "Nama" => "Yani Suryani",
            "Tanggal_Lahir" => "15 Oktober 1990",
            "Alamat" => "Jln. Soetta No. 13",
            "Jumlah_Anak" => 2,
            "Nama_Suami" => "Endang"
        ],
        [
            "NIK" => "139834304957",
            "Nama" => "Endah Sriyani",
            "Tanggal_Lahir" => "25 Juni 1992",
            "Alamat" => "Jln. Raya No. 33",
            "Jumlah_Anak" => 7,
            "Nama_Suami" => "Budi"
        ],
    ];

    public static function all()
    {
        return collect(self::$DataIbu);
    }

    public static function find($NIK)
    {
        $Ibu = static::all();
        return $Ibu->firstWhere('NIK', $NIK);
    }
}
