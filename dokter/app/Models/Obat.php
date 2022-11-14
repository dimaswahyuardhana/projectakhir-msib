<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";
    protected $fillable = [
        'nama_obat', 'stok'
    ];

    public function resep_obat()
    {
        return $this->hasMany(resepObat::class);
    }
}
