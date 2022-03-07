@extends('posts.layout')


@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>{{ $post->title }}</h2>
        </div>
    </div>


    <div class="row">
        <div class="card p-5">
            <div class="card-title">
                <strong>Project:</strong>
                {{ $post->title }}
            </div>
            <div class="card-text">
                <strong>Description:</strong>
                {{ $post->description }}
        </div>
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-primary my-3">Back</a>

@endsection