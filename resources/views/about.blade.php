@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>About Me</h1>
        <p>A short introduction about who I am and what I like.</p>
    </section>

    <section class="grid-2">
        <article class="card profile-card">
            <span class="showcase-label">Profile</span>
            <h2>{{ $name }}</h2>
            <p><strong>Study:</strong> {{ $study }}</p>
            <p><strong>Location:</strong> {{ $location }}</p>
            <p>{{ $bio }}</p>
        </article>

        <article class="card profile-card">
            <span class="showcase-label">Interests</span>
            <h2>What inspires me</h2>
            <p>I am interested in web development, software engineering, and modern automotive design.</p>
            <p>I like learning new tools and building projects that combine design and functionality.</p>
        </article>
    </section>

    <section class="grid-3">
        <article class="card feature-card">
            <div class="feature-icon">🌍</div>
            <h3>Learning</h3>
            <p>I enjoy discovering new programming concepts and improving my problem-solving skills.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">⚙️</div>
            <h3>Technology</h3>
            <p>I am interested in how digital systems work and how software can improve daily life.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">✨</div>
            <h3>Creativity</h3>
            <p>I also enjoy making projects look clean, modern, and easy to use.</p>
        </article>
    </section>
@endsection