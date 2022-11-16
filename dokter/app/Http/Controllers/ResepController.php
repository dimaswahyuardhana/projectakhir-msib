<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\resepObat;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep = resepObat::all();
        // dd($resep);
        return view('admin.resep.index', compact('resep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = Obat::all();
        $dokter = Dokter::all();
        return view('admin.resep.create', compact('obat', 'dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'keterangan' => 'required',
                'obat_id' => 'required',
                'dokter_id' => 'required',
            ]
        );

        $data = [
            'keterangan' => $request->keterangan,
            'obat_id' => $request->obat_id,
            'dokter_id' => $request->dokter_id
        ];

        resepObat::create($data);
        return redirect()->route('admin-resep.index')->with('success', 'Berhasil mengirim resep obat ke apotik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resep = resepObat::find($id);
        $obat = Obat::all();
        $dokter = Dokter::all();
        // dd($obat);
        return view('admin.resep.edit', compact('resep', 'obat', 'dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'keterangan' => 'required',
                'obat_id' => 'required',
                'dokter_id' => 'required',
            ]
        );

        $data = [
            'keterangan' => $request->keterangan,
            'obat_id' => $request->obat_id,
            'dokter_id' => $request->dokter_id
        ];

        resepObat::where('id', $id)->update($data);
        return redirect()->route('admin-resep.index')->with('success', 'Berhasil mengirim update resep obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        resepObat::where('id', $id)->delete();
        return redirect()->route('admin-resep.index')->with('success', 'Berhasil hapus data');
    }
}
