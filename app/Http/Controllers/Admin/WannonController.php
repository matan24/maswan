<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Wannon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WanNonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wancreate_non()
    {
        $wannon = Wannon::all();
        return view('admin.input4.wancreate-non-staff', compact('wannon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'cv' => 'file',

        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv-wannon-staff', 'public');
        }

        $wannon = Wannon::create([
         
            'nik_wns' => $request->nik_wns,
            'npwp' => $request->npwp,
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'ttl' => $request->ttl,
            'umur' => $request->umur,
            'gender' => $request->gender,
            'status_karyawan' => $request->status_karyawan,
            'pkwt' => $request->pkwt,
            'pkwtt' => $request->pkwtt,
            'tmk' => $request->tmk,
            'jabatan' => $request->jabatan,
            'domisili' => $request->domisili,
            'pendidikan' => $request->pendidikan,
            'agama' => $request->agama,
            'status_pernikahan' => $request->status_pernikahan,
            'jml_anak' => $request->jml_anak,
            'wp' => $request->wp,
            'bpjs_kesehatan' => $request->bpjs_kesehatan,
            'bpjs_kerja' => $request->bpjs_kerja,
            'cv' => $filepath,
            'ktp' => $filepath,      

        ]);

        return redirect()->route('admin.input4.wancreate-non-staff')->with('status', 'Karyawan berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wannon  $wannon
     * @return \Illuminate\Http\Response
     */
    public function wanshow_non(Wannon $wannon)
    {
        $wannon = Wannon::all();
        return view('admin.input4.wanshow-non-staff', compact('wannon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wannon  $wannon
     * @return \Illuminate\Http\Response
     */
    public function wanedit_non($id)
    {
        $decryptID = Crypt::decryptString($id);
        $wannon = Wannon::findOrFail($decryptID);   

        return view('admin.input4.wanedit-non-staff', compact('wannon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wannon  $wannon
     * @return \Illuminate\Http\Response
     */
    public function update_wan_non(Request $request, $id)
    {
        $request->validate([

            'cv' => 'file',

        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv-wannon-staff', 'public');
        }

        Wannon::where("id", $id)
        ->update([
             
            'nik_wns' => $request->nik_wns,
            'npwp' => $request->npwp,
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'ttl' => $request->ttl,
            'umur' => $request->umur,
            'gender' => $request->gender,
            'status_karyawan' => $request->status_karyawan,
            'pkwt' => $request->pkwt,
            'pkwtt' => $request->pkwtt,
            'tmk' => $request->tmk,
            'jabatan' => $request->jabatan,
            'domisili' => $request->domisili,
            'pendidikan' => $request->pendidikan,
            'agama' => $request->agama,
            'status_pernikahan' => $request->status_pernikahan,
            'jml_anak' => $request->jml_anak,
            'wp' => $request->wp,
            'bpjs_kesehatan' => $request->bpjs_kesehatan,
            'bpjs_kerja' => $request->bpjs_kerja,
            'cv' => $filepath,
            'ktp' => $filepath,   

        ]);
      
        return redirect()->route('admin.input4.wanshow-non-staff', $id)->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wannon  $wannon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wannon $wannon)
    {
        $wannon->delete();
        return redirect()->route('admin.input4.wanshow-non-staff')->with('status', 'Data Berhasil dihapus!');
    }
}
