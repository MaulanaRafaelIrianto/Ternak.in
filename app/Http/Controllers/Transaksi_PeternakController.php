<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kambing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Transaksi_PeternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kambing = DB::table('kambing')->join('investor','investor.id','=','kambing.idinvestor')->where('kambing.idpeternak', Auth::user()->id)->where('kambing.statuspersetujuan2',1)->get();
        // $kambing = Kambing::where('idpeternak', Auth::user()->id)->where('statuspersetujuan1', 1)->get();
        return view('peternak.riwayattransaksi_peternak', ['kambing' => $kambing]);
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
