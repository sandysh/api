@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            @can('create')
            <input type="text" name="new-post" placeholder="add a post">
            @endcan
        </div>
    </div>
</div>
@endsection
