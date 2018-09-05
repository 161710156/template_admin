<?php

namespace App\Http\Controllers;

use App\jawab;
use App\pertanyaan;
use Illuminate\Http\Request;

class JawabController extends Controller
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
        $jawab = jawab::all();
        return view('jawab.index',compact('jawab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pertanyaan = pertanyaan::all();
        return view('jawab.create',compact('pertanyaan'));
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
            'jawaban' => 'required|',
            'id_pertanyaan' => 'required|'
        ]);
        $jawab = new jawab;
        $jawab->jawaban = $request->jawaban;
        $jawab->id_pertanyaan = $request->id_pertanyaan;

        $jawab->save();
        return redirect()->route('jawab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function show(jawab $jawab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function edit(jawab $jawab)
    {
        $jawab = jawab::findOrFail($jawab->id);
        $pertanyaan = pertanyaan::all();
        return view('jawab.edit',compact('jawab','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jawab $jawab)
    {
        $this->validate($request,[
            'jawaban' => 'required|',
            'id_pertanyaan' => 'required|'
   ]);

        $jawab = jawab::findOrFail($jawab->id);
        $jawab->jawaban = $request->jawaban;
        $jawab->id_pertanyaan = $request->id_pertanyaan;

        $jawab->save();
        return redirect()->route('jawab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function destroy(jawab $jawab)
    {
        $jawab =jawab::findOrFail($id);
        $jawab->delete();
        return redirect()->route('jawab.index');
    }
}
