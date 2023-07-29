<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        // dd($profile->na);
        return view('website.home.index');
    }
}
