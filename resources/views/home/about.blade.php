<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('images/123.png') }}" alt="About Me" class="img-fluid rounded-circle shadow-lg">
        </div>
        <div class="col-md-6">
            <h1 class="mb-4 text-primary">About Me</h1>
            <p>{{ $aboutText }}</p>
        </div>
    </div>
@endsection

