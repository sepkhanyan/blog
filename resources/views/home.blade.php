@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <a href="{{'/post'}}">Posts</a>
                        @if(Auth::user()->role == 'admin')
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th>Id</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{ url('user/edit/' . $user->id )}}" title="Edit"
                                               class="margin-right-5">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a href="{{ url('user/delete/' . $user->id )}}" title="Delete"
                                               class="margin-right-5">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <a href="{{ url('/user/create') }}">Create user</a>
                        @else
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th>Id</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

