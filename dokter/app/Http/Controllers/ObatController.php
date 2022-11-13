<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('admin.obat.index')->with('obat', $obat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.obat.create');
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
                'nama_obat' => 'required',
                'stok' => 'numeric',
            ]
        );

        $data = [
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok
        ];

        Obat::create($data);
        return redirect()->to('obat_form')->with('success', 'Berhasil menambah data obat');
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
        $data = Obat::where('id', $id)->first();
        return view('', compact('data'));
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
                'nama' => 'required',
                'keahlian' => 'required',
                'no_telp' => 'required|numeric'
            ]
        );

        $data = [
            'nama' => $request->nama,
            'keahlian' => $request->keahlian,
            'no_telp' => $request->no_telp,
        ];

        Obat::where('id', $id)->update($data);
        return redirect()->route('')->with('success', 'Berhasil menambah data dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::where('id', $id)->delete();
        return redirect()->route('')->with('success', 'Berhasil hapus data');
    }
}
