<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mhs = Siswa::with('Kelas')->get();
        return view('siswa.index',compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create',compact('kelas'));
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
            'nis' => 'required|unique:siswas',
            'kelas_id' => 'required'
        ]);
        $mhs = new Siswa;
        $mhs->nama = $request->nama;
        $mhs->nis = $request->nis;
        $mhs->kelas_id = $request->kelas_id;
        $mhs->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mhs->nama</b>"
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = Siswa::findOrFail($id);
        return view('siswa.show',compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        $selectedKelas = Siswa::findOrFail($id)->kelas_id;
        return view('siswa.edit',compact('mhs','kelas','selectedKelas'));
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
            'nis' => 'required|',
            'kelas_id' => 'required'
        ]);
        $mhs = Siswa::findOrFail($id);
        $mhs->nama = $request->nama;
        $mhs->nis = $request->nis;
        $mhs->kelas_id = $request->kelas_id;
        $mhs->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$mhs->nama</b>"
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Siswa::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('siswa.index');
    }
}
