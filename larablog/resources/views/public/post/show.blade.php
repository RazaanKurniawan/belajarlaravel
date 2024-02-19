@extends('layouts.frontend')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h1><p>{{ $post->title }}</p></h1>
            <p class="text-muted">{{ $post->created_at->format('d-M-Y') }} Created By {{ $post->user->name }} <a href="{{ route('category.show', $post->category->id) }}">{{ $post->category->name }}</a></p>
        </div>
        <div class="col-md-8 mx-auto d-flex justify-content-center">
            {{-- <div class="w-100" style="background-color:grey;height:500px;border-radius:20px;"></div> --}}
            <img width="730px" height="800x" src="{{ asset('storage/' . $post->image) }}" style="border-radius:20px; object-fit:cover" alt="">
        </div>
        <div class="col-md-8 mx-auto mt-4 text-center ">
            {{ $post->description }}
        </div>
    </div>
</div>
@endsection
