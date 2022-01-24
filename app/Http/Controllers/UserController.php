<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
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
        return redirect('/user');
    }
    public function edit(User $user){
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user, Agent $agent){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $agent->phone = $request->phone;
        $agent->bio = $request->bio;
        // if($request->hasfile('photo')){
        //     $file = $request->file('photo');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('uploads/agents', $filename);
        //     $agent->photo = $filename;
        // }
        $user->agent()->save($agent);
        return redirect('/user');
    }
}
