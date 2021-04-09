<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reverse;

class ROSController extends Controller
{
    public function index(){
        $reverses = Reverse::all();
        return view('pages.reverse.ros')->with('reverses',$reverses);
    }
}
