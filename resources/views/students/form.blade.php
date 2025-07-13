@extends('layouts.app-customer')
@section('title')
Add Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
    <p><a href="{{ route('students.index') }}">Students</a> / Student</p>
    <h3 class="mb-5 text-center">Add Student</h3>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" required>
                <span class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">E-Mail:</label>
                <input type="email" value="{{ old('email') }}" class="form-control" aria-describedby="emailHelp" name="email" required>
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection