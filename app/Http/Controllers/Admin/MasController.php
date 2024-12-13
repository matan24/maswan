<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function maskaryawan(Mas $mas)
    {
        $mas = Mas::all();
        return view('admin.input1.maskaryawan', compact('mas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mascreate()
    {
        $mas = Mas::all();
        return view('admin.input1.mascreate', compact('mas'));
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
            $filepath = $request->file('cv')->store('post-cv', 'public');
        }

        $mas = Mas::create([

            'nik_ms' => $request->nik_ms,
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

        return redirect()->route('admin.input1.mascreate')->with('status', 'Informasi berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mas  $mas
     * @return \Illuminate\Http\Response
     */
    public function show_staff(Mas $mas)
    {
        $mas = Mas::all();
        return view('admin.input1.show-staff', compact('mas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mas  $mas
     * @return \Illuminate\Http\Response
     */
    public function editmas_staff($id)
    {
        $decryptID = Crypt::decryptString($id);
        $mas = Mas::findOrFail($decryptID);

        return view('admin.input1.masedit-staff', compact('mas'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mas  $mas
     * @return \Illuminate\Http\Response
     */
    public function update_staff_mas(Request $request, $id)
    {

        $request->validate([

            'cv' => 'file'
        ]);

        if($request->hasFile('cv')) {
            $filepath = $request->file('cv')->store('post-cv', 'public');
        }

        Mas::where("id", $id)
        ->update([
            'nik_ms' => $request->nik_ms,
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
      
        return redirect()->route('admin.input1.show-staff', $id)->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mas  $mas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mas $mas)
    {
        $mas->delete();
        return redirect()->route('admin.input1.show-staff')->with('status', 'Data informasi Berhasil dihapus!');
    }
}
