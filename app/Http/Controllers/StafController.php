<?php

namespace App\Http\Controllers;

use App\Staf;
use Session;
use Illuminate\Http\Request;

class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $a = Staf::all();
        return view('staf.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staf.create');
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
            'nama_staf' => 'required|',
            'jabatan' => 'required|'
        ]);
        $a = new Staf;
        $a->nama_staf = $request->nama_staf;
        $a->jabatan = $request->jabatan;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama_staf</b>"
        ]);
        return redirect()->route('staf.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function show(Staf $staf)
    {
        $a = Staf::findOrFail($id);
        return view('staf.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function edit(Staf $staf)
    {
        $a = Staf::findOrFail($id);
        return view('staf.edit',compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staf $staf)
    {
        $this->validate($request,[
            'nama_staf' => 'required|',
            'jabatan' => 'required|'
        ]);
        $a = Staf::findOrFail($id);
        $a->nama_staf = $request->nama_staf;
        $a->jabatan = $request->jabatan;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$a->nama_staf</b>"
        ]);
        return redirect()->route('staf.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staf $staf)
    {
        $a = Staf::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('staf.index');
    }
}
