<?php

namespace App\Http\Controllers;

use App\data_pegawai;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;
use App\User;
use File;

class DataPegawaiController extends Controller
{
    use RegistersUsers ;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datpeg = data_pegawai::all();
        return view('data_pegawai.index',compact('datpeg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_pegawai.create');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nipd' => 'required|unique:data_pegawais|min:3',
            'gambar' => 'required|'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        $adminRole = Role::where('name','admin')->first();
        $user->attachRole($adminRole);
        $datpeg = new data_pegawai;
        $datpeg->nipd = $request->nipd;
        $datpeg->id_user = $user->id;
                $datpeg->gambar  = $request->gambar  ;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $datpeg->gambar = $filename;
            }
        $datpeg->save();
        return redirect()->route('data_pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\data_pegawai  $data_pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(data_pegawai $data_pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data_pegawai  $data_pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datpeg = data_pegawai::findOrFail($id);
        return view('data_pegawai.edit',compact('datpeg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data_pegawai  $data_pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nama' => 'required|',
            'nipd' => 'required|',
            'gambar' => 'required'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'permission' => $request['permission'],
            'password' => bcrypt($request['password'])
        ]);
        $datpeg = data_pegawai::findOrFail($id);
        $datpeg->nama = $request->nama;
        $datpeg->nipd = $request->nipd;
        $datpeg->id_user = $request->id_user;

        if ($request->hasFile('gambar')) {
    $file = $request->file('gambar');
    $destinationPath = public_path().'/assets/images/avatar/';
    $filename = str_random(6).'_'.$file->getClientOriginalName();
    $uploadSuccess = $file->move($destinationPath, $filename);

    // hapus foto lama, jika ada
        if ($datpeg->gambar) {
        $old_foto = $datpeg->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/images/avatar'
        . DIRECTORY_SEPARATOR . $datpeg->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
    $datpeg->gambar = $filename;
}

        $datpeg->save();
        return redirect()->route('data_pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data_pegawai  $data_pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user1 = user::findOrFail($id);
        $datpeg =data_pegawai::findOrFail($id);

        if ($datpeg->gambar) {
            $old_foto = $datpeg->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/images/avatar/'
            . DIRECTORY_SEPARATOR . $datpeg->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }

        $datpeg->delete('cascade');
        return redirect()->route('data_pegawai.index');
    }
}
