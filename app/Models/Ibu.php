<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    // boleh diisi dengan method create
    // protected $fillable = ['name', 'NIK', 'alamat', 'no_KK', 'tanggal_lahir', 'jumlah_anak', 'active', 'nama_suami']; 

    //tidak boleh diisi dengan method create
    protected $guarded = ['id'];

    public function anak()
    {
        return $this->hasMany(Anak::class, 'nik_ibu', 'NIK');
    }
}
