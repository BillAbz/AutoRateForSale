@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Thank You</h1>
        <p>Your message has been submitted successfully.</p>
    </section>

    <section class="card">
        <h2>Thanks, {{ $name }}!</h2>
        <p>This page demonstrates a simple Laravel form submission with validation.</p>
        <a href="{{ route('home') }}" class="btn">Back to Home</a>
    </section>
@endsection