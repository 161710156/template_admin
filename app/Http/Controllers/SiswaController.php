<?php

namespace App\Http\Controllers;

use App\siswa;
use App\kelas;
use App\jurusan;
use File;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;
use App\User;

class SiswaController extends Controller
{
    use RegistersUsers ;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        return view('siswa.create',compact('jurusan','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requsest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nis' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|',
            'jk' => 'required|',
            'agama' => 'required|',
            'alamat' => 'required|',
            'no_hp' => 'required|',
            'gambar' => 'required|',
            'id_kelas' => 'required|',
            'id_jurusan' => 'required|'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        $memberRole = Role::where('name','member')->first();
        $user->attachRole($memberRole);
        $siswa = new siswa;
        $siswa->id_user = $user->id;
        $siswa->nis = $request->nis;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
                if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $siswa->gambar = $filename;
            }
        
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //$siswa = siswa::findOrFail($id);
        //return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        $selecteda = siswa::findOrFail($siswa->id)->id_kelas;
        $selectedb = siswa::findOrFail($siswa->id)->id_jurusan;
        return view('siswa.edit',compact('kelas','jurusan','siswa','selecteda','selectedb'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nis' => 'required|',
            'nama' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|',
            'jk' => 'required|',
            'agama' => 'required|',
            'alamat' => 'required|',
            'no_hp' => 'required|',
            'gambar' => 'required|',
            'id_kelas' => 'required|',
            'id_jurusan' => 'required|'
   ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'permission' => $request['permission'],
            'password' => bcrypt($request['password'])
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->gambar = $request->gambar;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_jurusan = $request->id_jurusan;

        //hapus gambar
        if ($request->hasFile('gambar')) {
    $file = $request->file('gambar');
    $destinationPath = public_path().'/assets/images/avatar/';
    $filename = str_random(6).'_'.$file->getClientOriginalName();
    $uploadSuccess = $file->move($destinationPath, $filename);

    // hapus foto lama, jika ada
        if ($siswa->gambar) {
        $old_foto = $siswa->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/images/avatar'
        . DIRECTORY_SEPARATOR . $siswa->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
    $siswa->gambar = $filename;
}

        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user1 = user::findOrFail($id);
        $siswa = siswa::findOrFail($id);
        if ($siswa->gambar) {
            $old_foto = $siswa->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/images/avatar/'
            . DIRECTORY_SEPARATOR . $siswa->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $siswa->delete();
    
        return redirect()->route('siswa.index');    
    }
}
