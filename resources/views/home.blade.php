@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-text">
            <span class="badge">Laravel Mini Website</span>
            <h1>{{ $heroTitle }}</h1>
            <p>{{ $heroText }}</p>

            <div class="button-group">
                <a href="{{ route('about') }}" class="btn">About Me</a>
                <a href="{{ route('cars') }}" class="btn btn-secondary">View Cars</a>
            </div>
        </div>
    </section>

    <section class="grid-3">
        <article class="card feature-card">
            <div class="feature-icon">🚗</div>
            <h2>Cars</h2>
            <p>I enjoy learning about performance cars, elegant design, and automotive technology.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">💻</div>
            <h2>Development</h2>
            <p>This website helps me practice Laravel, routing, controllers, models, and Blade templates.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">🎯</div>
            <h2>Goal</h2>
            <p>My goal is to build a structured mini website with a modern interface and proper MVC architecture.</p>
        </article>
    </section>

    <section class="showcase-grid">
        <article class="card showcase-card">
            <span class="showcase-label">Favorite Section</span>
            <h2>Car Collection</h2>
            <p>You can add, edit, and remove cars from the collection page, which makes this project more interactive.</p>
            <a href="{{ route('cars') }}" class="btn">Go to Cars</a>
        </article>

        <article class="card stats-card">
            <div class="stat-box">
                <h3>6+</h3>
                <p>Pages</p>
            </div>
            <div class="stat-box">
                <h3>MVC</h3>
                <p>Pattern</p>
            </div>
            <div class="stat-box">
                <h3>MySQL</h3>
                <p>Database</p>
            </div>
        </article>
    </section>
@endsection