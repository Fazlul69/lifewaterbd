<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SingleFilter;

class SingleController extends Controller
{
    public function index(){
        $filters = SingleFilter::all();
        return view('pages.single.single')->with('filters', $filters);
    }
}
