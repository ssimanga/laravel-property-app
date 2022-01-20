@extends('layouts.main')
@section('content')
<h1>Add a User</h1>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Agent</h3>
    </div>
    <form action="/user/{{$user->id}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$user->name}}" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{$user->email}}" id="" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="{{$user->agent->phone}}" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Bio</label>
                <textarea name="bio" id="" cols="30" rows="10" class="form-control">
                    {{$user->agent->bio}}
                </textarea>
            </div>
            <div class="form-group">
                <input type="file" name="photo" id="" class="form-control">
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
            <a href="/user" class="btn btn-danger">Cancel</a>
        </div>
        
    </form>
</div>
@endsection
