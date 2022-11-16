<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepObat extends Model
{
    use HasFactory;
    protected $table = "resep_obats";
    protected $fillable = [
        'keterangan', 'obat_id', 'dokter_id'
    ];

    // relasi ke dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // relasi ke obat
    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
