@extends('layouts.app-customer')
@section('title')
Update Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
    <p><a href="{{ route('photo.index') }}">Photos</a> / Update</p>
    <h3 class="mb-5 text-center">Update Photo</h3>
        <form action="{{ route('photo.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="file_upload">File Upload</label>
    <input onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control-file" name="file_upload" id="file_upload" required>
                <span class="text-danger">
                    @error('file_upload')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="col-3">
            <img id="output" src="{{ asset('/storage/'. $photo->file_name) }}" alt="" class="img-thumbnail">
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
</div>
@endsection