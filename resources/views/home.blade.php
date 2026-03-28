@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-text">
            <span class="badge">Laravel Mini Website</span>
            <h1>{{ $heroTitle }}</h1>
            <p>{{ $heroText }}</p>

            <div class="button-group">
                <a href="{{ route('about') }}" class="btn">Learn More About Me</a>
                <a href="{{ route('cars') }}" class="btn btn-secondary">See My Favorite Cars</a>
            </div>
        </div>
    </section>

    <section class="grid-3">
        <article class="card">
            <h2>About Me</h2>
            <p>I am building this website to learn Laravel, Blade, routing, and the MVC pattern.</p>
        </article>

        <article class="card">
            <h2>My Interest</h2>
            <p>I am interested in automotive culture, design, and web development.</p>
        </article>

        <article class="card">
            <h2>Goal</h2>
            <p>This project helps me practice creating a complete mini website with multiple pages.</p>
        </article>
    </section>
@endsection