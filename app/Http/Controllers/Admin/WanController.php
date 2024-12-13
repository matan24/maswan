<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Wan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wankaryawan()
    {
        return view('admin.input3.wankaryawan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wancreate_staff()
    {
        $wan = Wan::all();
        return view('admin.input3.wancreate-staff', compact('wan'));
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
            $filepath = $request->file('cv')->store('post-cv-wanstaff', 'public');
        }

        $wan = Wan::create([

            'nik_ws' => $request->nik_ws,
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

        return redirect()->route('admin.input3.wancreate-staff')->with('status', 'Karyawan berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wan  $wan
     * @return \Illuminate\Http\Response
     */
    public function wanshow_staff(Wan $wan)
    {
        $wan = Wan::all();
        return view('admin.input3.wanshow-staff', compact('wan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wan  $wan
     * @return \Illuminate\Http\Response
     */
    public function wanedit_staff($id)
    {
        $decryptID = Crypt::decryptString($id);
        $wan = Wan::findOrFail($decryptID);   

        return view('admin.input3.wanedit-staff', compact('wan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wan  $wan
     * @return \Illuminate\Http\Response
     */
    public function update_wan_staff(Request $request, $id)
    {
        $request->validate([

            'cv' => 'file',

        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv-wanstaff', 'public');
        }

        Wan::where("id", $id)
        ->update([
            'nik_ws' => $request->nik_ws,
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
      
        return redirect()->route('admin.input3.wanshow-staff', $id)->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wan  $wan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wan $wan)
    {
        $wan->delete();
        return redirect()->route('admin.input3.wanshow-staff')->with('status', 'Data Berhasil dihapus!');
    }
}
