<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Model\Agent;

class UserController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        $agent = new Agent();
        $agent->phone = $request->phone;
        $agent->bio = $request->bio;
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/agents', $filename);
            $agent->photo = $filename;
        }
        $user->agent()->save($agent);
        return redirect()->back()-with('status','agent successfully added');
    }
}
