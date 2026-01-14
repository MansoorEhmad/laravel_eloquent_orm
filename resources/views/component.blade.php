@extends('layouts.app-customer')
@section('title')
Components
@endsection
@section('content')
<div class="container">
    <!-- static -->

    <!-- dynamic -->
    <x-alert type="warning" message="Dynamic message goes here"/>
</div>
@endsection