<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Under;

class UnderCounterController extends Controller
{
    public function index(){
        return view('admin.under.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'details' => 'required',
        ]);

        $unders = new Under;
        $unders =Under::create($request->all());
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/under/',$filename);
            $unders->image = $filename;
        }else{
            //return $request;
            $unders->image = '';
        }

        $unders->save();
        // Session::flash('success','Data insert successfully');
        return redirect(route('under.index'));
    }
}
