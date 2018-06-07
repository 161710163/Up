<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Eskul;
use Session;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::with('Siswa')->get();
        return view('eskul.index',compact('eskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mhs = Siswa::all();
        return view('eskul.create',compact('mhs'));
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
            'siswa_id' => 'required|unique:eskuls'
        ]);
        $eskul = new Eskul;
        $eskul->nama = $request->nama;
        $eskul->siswa_id = $request->siswa_id;
        $eskul->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$eskul->nama</b>"
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
        $eskul = Eskul::findOrFail($id);
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
        $eskul = Eskul::findOrFail($id);
        $mhs = Siswa::all();
        $selectedMhs = Eskul::findOrFail($id)->siswa_id;
        return view('eskul.edit',compact('mhs','eskul','selectedMhs'));
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
            'siswa_id' => 'required'
        ]);
        $eskul = Eskul::findOrFail($id);
        $eskul->nama = $request->nama;
        $eskul->siswa_id = $request->siswa_id;
        $eskul->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$eskul->nama</b>"
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
        $a = Eskul::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('eskul.index');
    }
}
