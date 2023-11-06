<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show_admin_home(){
        return view('Admin.trangchu');
    }
}
