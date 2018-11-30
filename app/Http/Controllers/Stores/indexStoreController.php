<?php

namespace App\Http\Controllers\stores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexStoreController extends Controller
{
    public function index(Request $check_bugs){
        //Landing Pertama "/"
        
        $varGiven = $check_bugs->cookie('nama');
        if(empty($varGiven))
            return view('welcome',['varGiven' => $varGiven]);     
    }
}
