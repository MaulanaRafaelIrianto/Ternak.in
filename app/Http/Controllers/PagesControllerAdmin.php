<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    //
    public function home(){
    	return view('admin.dashboard_admin');
    }
}
