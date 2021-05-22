<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessories;

class AccessoriesController extends Controller
{
    public function index(){
        $accessories = Accessories::all();
        // return view('pages.single.single')->with('filters', $filters);
        return view('pages.accessories.accessories')->with('accessories', $accessories);
    }
}
