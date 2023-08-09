<!-- resources/views/contact.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="mb-4 text-primary">Contact</h1>
            <div class="contact-details">
                <p><i class="fas fa-envelope"></i> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
                <p><i class="fab fa-linkedin"></i> <a href="{{ $linkedin }}" target="_blank">LinkedIn</a></p>
                <p><i class="fab fa-github"></i> <a href="{{ $github }}" target="_blank">GitHub</a></p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/xyz.png') }}" alt="Contact" class="img-fluid shadow-lg">
        </div>
    </div>

    <div class="row mt-5">
        <!-- ... (your contact form) ... -->
    </div>
@endsection