@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <a href="{{'/'}}">Users</a>
                        @if(count($posts) > 0)
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th>Id</th>

                                    <th>Title</th>

                                    <th>Image</th>

                                    <th>Action</th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td><img src="/images/{{$post->image}}" width="50px" height="40px"></td>
                                        <td>

                                            <a href="{{url('post/show/' . $post->id )}}" title="View"
                                               class="margin-right-5">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>

                                            @if(Auth::user()->role == 'admin' || Auth::user()->id == $post->user_id)
                                                <a href="{{ url('post/edit/' . $post->id )}}" title="Edit"
                                                   class="margin-right-5">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a href="{{ url('post/delete/' . $post->id )}}" title="Delete"
                                                   class="margin-right-5">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            @endif


                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <h2 class="text-center">No posts available</h2>
                        @endif
                        <a href="{{'/post/create'}}">Creat Post</a>

                    </div>
                </div>
            </div>
        </div>
@endsection

