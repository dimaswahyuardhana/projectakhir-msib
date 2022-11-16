<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $fillable = [
        'nama', 'keahlian', 'no_telp', 'image'
    ];

    // Relasi ke resep obat
    public function resep_obat()
    {
        return $this->hasMany(resepObat::class);
    }
}
