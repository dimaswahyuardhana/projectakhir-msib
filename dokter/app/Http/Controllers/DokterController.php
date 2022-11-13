<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
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

        Dokter::create($data);
        return redirect()->to('dokter_form')->with('success', 'Berhasil menambah data dokter');
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
        $data = Dokter::where('id', $id)->first();
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

        Dokter::where('id', $id)->update($data);
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
        Dokter::where('id', $id)->delete();
        return redirect()->route('')->with('success', 'Berhasil hapus data');
    }
}
