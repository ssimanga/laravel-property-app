@extends('layouts.main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3>Listings</h3>
                </div>
                <table class="table table-hover table-striped">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($properties as $property )
                        <tr>
                            <td>
                               <img src="uploads/properties/{{$property->photo}}" alt="">
                            </td>
                            <td>{{$property->Name}}</td>
                            <td>{{$property->Type}}</td>
                            <td>{{$property->description}}</td>
                            <td>{{$property->Address}}</td>
                            <td>{{$property->Price}}</td>
                            <td style="padding:5px;">
                                <a href="/user/{{$property->id}}"><i class="fa fa-edit"></i></a>
                                <a href="" class="ml-2"><i class="fa fa-eye text-success"></i></a>
                                <form action="/user/{{$property->id}}" class=" ml-2">
                                    <button type="submit" formmethod="POST">
                                        <i class="fa fa-trash text-danger"></i>
                                    </button>
                                </form>
                              
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection