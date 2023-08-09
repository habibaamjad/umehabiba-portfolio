<!-- resources/views/projects.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-primary">Projects</h1>
    @foreach($projects as $project)
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">{{ $project['title'] }}</h2>
                <p class="card-text">{{ $project['description'] }}</p>
            </div>
        </div>
    @endforeach
@endsection
