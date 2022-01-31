<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    
    public function create(){
        return view('properties.create');
    }

    public function store(Request $request){
        $property = new Property();
        $property->user_id = auth()->user()->id;
        $property->name = $request->name;
        $property->type = $request->type;
        $property->for = $request->for;
        $property->description = $request->description;
        //Photo goes here
        $property->price = $request->price;
        $property->address = $request->address;
    }
}
