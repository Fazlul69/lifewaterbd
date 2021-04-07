<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        return view('admin.client.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);

        $clients = new Client();
        
        $clients->name = $request->name;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/client/',$filename);
            $clients->image = $filename;
        }else{
            //return $request;
            $clients->image = '';
        }
        $clients->save();
        
        return redirect(route('client.index'));
    }
}
