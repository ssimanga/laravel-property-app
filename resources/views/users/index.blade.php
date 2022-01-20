@extends('layouts.main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3>All Users</h3>
                </div>
                <table class="table table-hover table-striped">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Bio</th>
                        <th></th>
                    </tr>
                    @foreach ($users as $user )
                        <tr>
                            <td>
                                <img src="uploads/agents/{{$user->agent->photo}}" alt="" width="50" height="50" style="border-radius:100%;">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->agent->phone}}</td>
                            <td>{{$user->agent->bio}}</td>
                            <td style="padding:5px;">
                                <a href="/user/{{$user->id}}"><i class="fa fa-edit"></i></a>
                                <a href="" class="ml-2"><i class="fa fa-eye text-success"></i></a>
                                <form action="/user/{{$user->id}}" class=" ml-2">
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