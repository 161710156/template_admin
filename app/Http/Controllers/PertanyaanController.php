<?php

namespace App\Http\Controllers;

use App\pertanyaan;
use App\siswa;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PertanyaanController extends Controller
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
        $pertanyaan = pertanyaan::all();
        return view('pertanyaan.index',compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $siswa = siswa::all();
        return view('pertanyaan.create',compact('siswa'));
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
            'id_user' => 'required|',
            'pertanyaan' => 'required|',
            'tanggal' => 'required|'
        ]);
        $user = Auth::user()->id;
        $pertanyaan = new pertanyaan;
        $pertanyaan->id_user = $user;
        $pertanyaan->pertanyaan = $request->pertanyaan;

        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pertanyaan $pertanyaan)
    {
        $pertanyaan = pertanyaan::findOrFail($pertanyaan->id);
        $siswa = siswa::all();
        return view('pertanyaan.edit',compact('pertanyaan','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pertanyaan $pertanyaan)
    {

        $this->validate($request,[
            'id_siswa' => 'required|',
            'pertanyaan' => 'required|',
            'tanggal' => 'required|'
   ]);

        $pertanyaan = pertanyaan::findOrFail($pertanyaan->id);
        $pertanyaan->id_siswa = $request->id_siswa;
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->tanggal = $request->tanggal;

        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pertanyaan $pertanyaan)
    {
        $pertanyaan =pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index');
    }
}
