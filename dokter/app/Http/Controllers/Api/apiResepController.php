<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\resepObat;
use Illuminate\Http\Request;

class apiResepController extends Controller
{
    public function index()
    {
        $result = resepObat::join('dokter', 'dokter.id', '=', 'resep_obat.dokter_id')
            ->join('obat', 'obat.id', '=', 'resep_obat.obat_id')
            ->join('pasien', 'pasien.id', '=', 'resep_obat.pasien_id')
            ->select('dokter.nama AS Nama Dokter', 'obat.nama_obat AS Nama Obat', 'resep_obat.keterangan', 'resep_obat.jumlah_obat', 'pasien.nama AS Nama Pasien', 'resep_obat.status')
            ->get();

        return response()->json(
            [
                'status' => true,
                'message' => 'Data Resep',
                'data' => $result
            ],
            200
        );
    }

    public function getResep($id)
    {
        $result = resepObat::join('dokter', 'dokter.id', '=', 'resep_obat.dokter_id')
            ->join('obat', 'obat.id', '=', 'resep_obat.obat_id')
            ->join('pasien', 'pasien.id', '=', 'resep_obat.pasien_id')
            ->select('dokter.nama AS Nama Dokter', 'obat.nama_obat AS Nama Obat', 'resep_obat.keterangan', 'resep_obat.jumlah_obat', 'pasien.nama AS Nama Pasien', 'resep_obat.status')
            ->where('resep_obat.id', '=', $id)
            ->first();

        if ($result) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data Resep',
                    'data' => $result
                ],
                200
            );
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
                'data'    => ''
            ], 401);
        }
    }
}
