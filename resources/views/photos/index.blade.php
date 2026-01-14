@extends('layouts.app-customer')
@section('title')
All Students | Laravel Eloquent ORM
@endsection
@section('content')
<div class="container">
    <h3 class="mt-5 mb-3 text-center">All Pictures</h3>
    <a href="{{ route('photo.create') }}" class="btn btn-success">Add New</a>
    <div class="row mt-3">
    @foreach($photos as $photo)
        <div class="col-3">
            <img src="{{ asset('/storage/'. $photo->file_name) }}" alt="" class="img-thumbnail">
            <form action="{{ route('photo.destroy', $photo->id) }}" class="mt-2" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                <a href="{{ route('photo.edit', $photo->id) }}" class="btn btn-warning btn-sm">Update</a>
            </form>
        </div>
    @endforeach
    </div>
</div>
@endsection