@extends('layouts.main')
@section('content')
<h1>Add a User</h1>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Agent</h3>
    </div>
    <form action="/property" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Property Type</label>
            <select name="type" id="" class="form-control">
                <option value="house">House</option>
                <option value="flat">Flat / Apartment</option>
                <option value="office">Office</option>
                <option value="Plot">Plot / farm</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Choose Type</label>
            <input type="radio" name="for" id="" class="form-control">Sale
            <input type="radio" name="for" id="" class="form-control">Rent

        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" id="" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" name="photo[]" multiple id="" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
</div
@endsection