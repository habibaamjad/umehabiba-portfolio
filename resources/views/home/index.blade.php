<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-5">
            <img src="{{ asset('images/img.jpg') }}" alt="Ume Habiba" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-7 text-center text-md-left">
            <h2 class="display-4 text-primary">{{ $name }}</h2>
            <h2 class="text-secondary">{{ $title }}</h2>
            <p class="lead">{{ $description }}</p>
        </div>
    </div>
@endsection