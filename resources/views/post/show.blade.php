@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2>{{$post->title}}</h2>
                        <p><img src="/images/{{$post->image}}" width="350px"></p>
                        <p>{{$post->description}}</p>
                        <a href="{{url('/post')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>
@endsection