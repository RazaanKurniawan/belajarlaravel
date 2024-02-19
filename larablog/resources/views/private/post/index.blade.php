@extends('layouts.app')

@section('content')

<div class="container">

    @if(session('message'))

    <div class="alert alert-success">{!! session('message') !!}</div>

    @endif
    @if(session('message_delete'))

    <div class="alert alert-danger">{!! session('message_delete') !!}</div>

    @endif
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">Your Post</h5>
                <a href="{{ route('post.create') }}" class="btn btn-primary">Create a new post</a>
            </div>
            @forelse ($posts as $post)
            <div class="d-flex justify-content-between align-items-center my-2">
                <div class="d-flex align-items-center">
                    <img height="75px" width="125px" src="{{ asset('storage/' . $post->image) }}" style="object-fit: cover" alt="Ga Muncul">
                    <div class="ms-3">
                        <p>{{ $post->title }}</p>
                        <p class="text-muted">{{ $post->created_at->format('Y-M-d') }} &middot; {{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="21px" height="20px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                    <form action="{{ route('post.destroy', $post->slug) }}" method="POST" class="d-inline">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin untuk menghapus post ini?')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="22px" height="21px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>

                        </button>
                    </form>
                </div>
            </div>
            @empty

            <div class="alert alert-danger mt-3 text-center " role="alert">
                You don't have any post
            </div>

            @endforelse
        </div>
    </div>
</div>



@endsection
