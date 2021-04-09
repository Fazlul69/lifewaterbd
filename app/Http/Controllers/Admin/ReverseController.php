<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reverse;

class ReverseController extends Controller
{
    public function index(){
        return view('admin.reverse.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'brand' => 'required',
            'capacity' => 'required',
            'original' => 'required',
            'membrane' => 'required',
            'filter_stage' => 'required',
            'size' => 'required',
            'reserve_capacity' => 'required',
            'technology' => 'required',
            'warranty' => 'required',
            'price' => 'nullable',
            'discount_price'=> 'nullable',
        ]);

        $reverses = new Reverse;
        $reverses =Reverse::create($request->all());
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/reverse/',$filename);
            $reverses->image = $filename;
        }else{
            //return $request;
            $reverses->image = '';
        }

        $reverses->save();
        // Session::flash('success','Data insert successfully');
        return redirect(route('ro.index'));
    }
}
