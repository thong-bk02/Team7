<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function View(){
        return view('admin.dashbroad');
    }

    public function profile(){
        return view('admin.profile.index');
    }
}
