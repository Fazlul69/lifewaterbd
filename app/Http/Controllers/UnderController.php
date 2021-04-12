<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Under;

class UnderController extends Controller
{
    public function index(){
        $unders = Under::all();
        return view('pages.under.under')->with('unders',$unders);
    }
}
