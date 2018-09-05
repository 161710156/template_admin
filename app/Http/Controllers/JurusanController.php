<?php

namespace App\Http\Controllers;

use App\jurusan;
use Illuminate\Http\Request;
use Session;

class JurusanController extends Controller
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
        $jurusan = jurusan::all();
        return view('jurusan.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'nama_jurusan' => 'required|'
        ]);
        $jurusan = new jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        Session::flash("flash_notification",[
            "level" =>"success",
            "message" => "Data <b>$jurusan->nama_jurusan </b> Succes "
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(jurusan $jurusan)
    {
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.show',compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.edit',compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama_jurusan' => 'required|']);
        $jurusan = jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();

        Session::flash("flash_notification",[
            "level" =>"success",
            "message" => "Data <b>$jurusan->nama_jurusan </b> Succes update"
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!jurusan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" =>"danger",
            "message" => "Berhasil dihapus"
        ]);
        return redirect()->route('jurusan.index');
    }
}
