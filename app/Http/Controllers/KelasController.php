<?php

namespace App\Http\Controllers;

use App\kelas;
use Illuminate\Http\Request;
use Session;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelas = kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
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
            'nama_kelas' => 'required|'
        ]);
        $kelas = new kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        Session::flash("flash_notification",[
            "level" =>"success",
            "message" => "Data <b>$kelas->nama_kelas </b> Succes "
        ]);
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        // $kelas = kelas::findOrFail($id);
        // return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Hnotificttp\Response
     */
    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama_kelas' => 'required|']);
        $kelas = kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        Session::flash("flash_notification",[
            "level" =>"success",
            "message" => "Data <b>$kelas->nama_kelas </b> Succes update"
        ]);
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!kelas::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" =>"danger",
            "message" => "Berhasil dihapus"
        ]);

        return redirect()->route('kelas.index');
    }
}
