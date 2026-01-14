@extends('layouts.app-customer')
@section('title')
Add Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
    <p><a href="{{ route('photo.index') }}">Photos</a> / Picture</p>
    <h3 class="mb-5 text-center">Add Picture</h3>
        <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file_upload">File Upload</label>
    <input type="file" class="form-control-file" name="file_upload" id="file_upload" required>
                <span class="text-danger">
                    @error('file_upload')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection