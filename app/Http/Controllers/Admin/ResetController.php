<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class ResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.password.edit'); 
    }

    public function updatepassword(Request $request)
    {
        $request->validate([

            'current_password' => ['required'],
            'password' => ['required', 'min:6', 'confirmed'],

        ]);

        //cek kondisi password yang dimasukkan sama atau tidak, jika tidak
        //maka akan muncul pesan 
        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('status', 'Password berhasil diperbarui');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with our record',
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reset  $reset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reset $reset)
    {
        //
    }
}
