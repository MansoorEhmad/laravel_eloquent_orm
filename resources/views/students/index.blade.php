@extends('layouts.app-customer')
@section('title')
All Students | Laravel Eloquent ORM
@endsection
@section('content')
<div class="container">
    <h3 class="mt-5 mb-3 text-center">All Students</h3>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New</a>
    <div class="row mt-3">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Read</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @php
                $serial = 0;
                @endphp
                @foreach($students as $d)
                @php
                $serial++;
                @endphp
                <tr>
                    <td>{{ $serial }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>
                    <td>
                        <a href="{{ route('students.show', $d->id) }}" class="btn btn-success"><i class="fa-brands fa-readme"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('students.edit', $d->id) }}" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $d->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-5">
            {{ $students->links() }}
         </div>
    </div>
</div>
@endsection