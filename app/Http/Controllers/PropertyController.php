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
       
        if($request->hasfile('photo')){
            foreach($request->file('photo') as $file){
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/properties/', $filename);
                $imgData[] = $filename;

            }
        }
       Property::create([
           'Photo' => json_encode($imgData),
           'Name' => $request->name,
           'Type' => $request->type,
           'for'=> $request->for,
           'description' => $request->description,
           'Address' => $request->address,
           'Price' => $request->price,
       ]);
      
    }
}
