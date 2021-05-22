<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accessories;

class AccessoriesController extends Controller
{
    public function index(){
        return view('admin.accessories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);

        $accessories = new Accessories;
        $accessories = Accessories::create($request->all());
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/accessories/',$filename);
            $accessories->image = $filename;
        }else{
            //return $request;
            $accessories->image = '';
        }

        $accessories->save();
        // Session::flash('success','Data insert successfully');
        return redirect(route('accessories.index'));
    }
}
