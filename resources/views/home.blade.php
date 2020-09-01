@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5>Post recently</h5>
        </div>
    </div>
    <div class="row justify-content-center">
        @forelse ($posts as $post)
            <div class="col-md-8">
                <div class="card mb-2">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </div>
        @empty
            <h6>No posts</h6>
        @endforelse
    </div>
    
</div>
@endsection
