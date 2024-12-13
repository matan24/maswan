<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Masnon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MasnonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noncreate()
    {
        $masnon = Masnon::all();
        return view('admin.input2.mascreate-non-staff', compact('masnon'));
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

            'cv' => 'file'

        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv-nonstaff', 'public');
        }

        $masnon = Masnon::create([

            'nik_mns' => $request->nik_mns,
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

        return redirect()->route('admin.input2.mascreate-non-staff')->with('status', 'Karyawan berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masnon  $masnon
     * @return \Illuminate\Http\Response
     */
    public function showmasnon(Masnon $masnon)
    {
        $masnon = Masnon::all();
        return view('admin.input2.showmas-non-staff', compact('masnon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masnon  $masnon
     * @return \Illuminate\Http\Response
     */
    public function editmasnon($id)
    {
        
        $decryptID = Crypt::decryptString($id);
        $masnon = Masnon::findOrFail($decryptID);   

        return view('admin.input2.editmas-non-staff', compact('masnon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masnon  $masnon
     * @return \Illuminate\Http\Response
     */
    public function update_masnon(Request $request, $id)
    {
        $request->validate([

            'cv' => 'file'
        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv-nonstaff', 'public');
        }

        Masnon::where("id", $id)
        ->update([
   
            'nik_mns' => $request->nik_mns,
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
      
        return redirect()->route('admin.input2.showmas-non-staff', $id)->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masnon  $masnon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masnon $masnon)
    {
        $masnon->delete();
        return redirect()->route('admin.input2.showmas-non-staff')->with('status', 'Data Berhasil dihapus!');
    }
}
