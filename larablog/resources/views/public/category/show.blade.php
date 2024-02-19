@extends('layouts.frontend')

@section('custom-style')
<style>
    .move-vertical-animation {
        transition : 0.2 s;
    }
    .move-vertical-animation:hover{
        transform: translateY(-10px);
    }
</style>

@endsection

@section('content')

<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <h4 class="mb-3">Post Category - {{ $category->name }}</h4>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($category->posts as $post)
            <div class="col-md-4">
                <div class="card shadow-sm move-vertical-animation">
                    <a href="{{ route('post.show', $post->slug) }}">
                        <img width="360px" height="225px" src="{{ asset('storage/' . $post->image) }}" style="object-fit: cover" alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{ $post->title }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ $post->user->name }}</small>
                                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
