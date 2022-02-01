<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Auth;

class PropertyController extends Controller
{
    
    public function create(){
        return view('properties.create');
    }

    public function store(Request $request){
        
        // if($files = $request->file('photo')){
        //     foreach($files as $file){
        //         $ext = $file->getClientOriginalExtension();
        //         $filename = time().'.'.$ext;
        //         $file->move('uploads/agents', $filename);
        //         $path = 'uploads/properties/';
        //         $url = $path.$filename;
        //         $file->move($path, $filename);
        //         $image[]=$url;
        //     }
        // }
       Property::create([
        //    'Photo' => implode('|', $image),
           'Name' => $request->name,
           'Type' => $request->type,
           'for'=> $request->for,
           'description' => $request->description,
           'Address' => $request->address,
           'Price' => $request->price,
       ]);
      
    }
}
