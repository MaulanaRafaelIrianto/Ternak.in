<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;

class PagesControllerAdmin extends Controller
{
    //
    public function home(){
        $peternak = Peternak::all();
        $investor = Investor::all();
        $admin    = Admin::all();
        $kambing  = Kambing::all();
    	return view('admin.dashboard_admin', ['peternak' => $peternak, 'investor' => $investor, 'admin' => $admin, 'kambing' => $kambing]);
    }

    public function grafik(){
    	return view('admin.grafik_admin');
    }

    public function profil(){
    	return view('admin.profil_admin');
    }
}
