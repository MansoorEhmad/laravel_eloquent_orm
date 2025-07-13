@extends('layouts.app-customer')
@section('title')
Single Student | Laravel Query Builder
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
       <p><a href="{{ route('students.index') }}">Students</a> / Student</p>
        <h3 class="mb-5 text-center">Student Details</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection