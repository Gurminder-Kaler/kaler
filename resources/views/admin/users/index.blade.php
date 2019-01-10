@extends('layouts.admin')
@section('content')

<h1>User Index</h1>
<div class="container">
    <div class="row">



        <div class="col-md-12">
                <h3>Users</h3>

                <table class="table table-responsive table-striped">
                      <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                          <th scope="col">Name{ Click to edit }</th>
                          <th scope="col">Role</th>
                          <th scope="col">Email</th>
                          <th scope="col">Status</th>
                          <th scope="col">Created At</th>
                          <th scope="col">Updated At</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if(count($users)>0)

                          @foreach($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                          <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                          <td>{{$user->created_at->diffForHumans()}}</td>
                          <td>{{$user->updated_at->diffForHumans()}}</td>

                      </tr>
                            @endforeach

                      @else
                          <h1>No users</h1>
                      @endif

                      </tbody>
                    </table>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                @include('includes.error')
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>

        </div>

</div>





@stop