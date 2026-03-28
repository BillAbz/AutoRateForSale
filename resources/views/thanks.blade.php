@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Thank You</h1>
        <p>Your message has been submitted successfully.</p>
    </section>

    <section class="card profile-card">
        <span class="showcase-label">Success</span>
        <h2>Thanks, {{ $name }}.</h2>
        <p>Your message has been saved successfully. This page shows a simple confirmation screen after form submission.</p>

        <div class="button-group">
            <a href="{{ route('home') }}" class="btn">Back to Home</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Send Another Message</a>
        </div>
    </section>
@endsection