<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class Profil_Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin = Admin::where('id', {{Auth::user()->id}})->first();
        return view('admin.profil_admin', ['admin' => $admin]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = Admin::findorfail($id);
        return view('admin.editprofil_admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama'     => ['required'],
            'alamat'   => ['required'],
            'nohp'     => ['required', 'max:14'],
            'noktp'    => ['required', 'size:16', 'unique:investor,username'],
            'username' => ['required', 'size:6'],
            'password' => ['required', 'size:10'],
            'email'    => ['required', 'email', 'unique:investor,email'],
            'scanktp'  => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file   = $request->file('scanktp');
        $folder = public_path('scanktpadmin');
        $file->move($folder, $file->getClientOriginalName());

        Admin::where('id', $id)->update([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'nohp'     => $request->nohp,
            'noktp'    => $request->noktp,
            'username' => $request->username,
            'password' => $request->password,
            'email'    => $request->email,
            'scanktp'  => $file->getClientOriginalName()
        ]);
        return redirect('/admin/profil')->with('status','Data Profil Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
