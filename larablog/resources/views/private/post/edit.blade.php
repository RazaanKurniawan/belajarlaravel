@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center ">
    <div class="card w-50">
        <div class="card-header">Edit Post - {{ $post->title }}</div>
        <div class="card-body">
            <form action="{{ route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PATCH')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" value="{{ $post->title }}" class="form-control @error('title') is-invalid @enderror" name="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                        @foreach ( $categories as $category )

                        <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>{{ $category->name }}</option>

                        @endforeach


                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" value="{{ $post->image }}" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" style="resize: none"  class="form-control @error('description') is-invalid @enderror" cols="30" rows="5" name="description">{{ $post->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div><br>

                <button type="submit" class="btn btn-primary float-right">Update</button>

            </form>
        </div>
    </div>
</div>

@endsection
