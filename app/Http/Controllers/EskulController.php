<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eskul;
use App\prestasi;
class eskul extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = eskul::with('prestasi')->get();
        return view('eskul.index',compact('eskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestasi = prestasi::all();
        return view('eskul.create',compact('prestasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'prestasi_id' => 'required'
        ]);
        $eskul = new eskul;
        $eskul->nama = $request->nama;
        $eskul->prestasi_id = $request->prestasi_id;
        $eskul->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pr->nama</b>"
        ]);
        return redirect()->route('eskul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.show',compact('eskul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskul = eskul::findOrFail($id);
        $prestasi = prestasi::all();
        $selectedeskul = eskul::findOrFail($id)->prestasi_id;
        return view('eskul.edit',compact('prestasi','eskul','selectedeskul'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'prestasi_id' => 'required'
        ]);
        $eskul = eskul::findOrFail($id);
        $eskul->nama = $request->nama;
        $eskul->prestasi_id = $request->prestasi_id;
        $eskul->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$pr->nama</b>"
        ]);
        return redirect()->route('eskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = eskul::findOrFail($id);
        $eskul->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('eskul.index');
    }
}
