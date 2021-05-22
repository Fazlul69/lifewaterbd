<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SingleFilter;

class SingleFilterController extends Controller
{
    public function index(){
        return view('admin.single.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);

        $singlefilter = new SingleFilter;
        $singlefilter = SingleFilter::create($request->all());
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/single/',$filename);
            $singlefilter->image = $filename;
        }else{
            //return $request;
            $singlefilter->image = '';
        }

        $singlefilter->save();
        // Session::flash('success','Data insert successfully');
        return redirect(route('single.index'));
    }
}
