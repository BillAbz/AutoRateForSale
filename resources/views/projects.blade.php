@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Skills & Projects</h1>
        <p>Things I am learning while building this website.</p>
    </section>

    <section class="grid-2">
        <article class="card">
            <span class="showcase-label">Learning Path</span>
            <h2>Current Learning Goals</h2>
            <ul class="styled-list">
                @foreach($projects as $project)
                    <li>{{ $project }}</li>
                @endforeach
            </ul>
        </article>

        <article class="card">
            <span class="showcase-label">Website Structure</span>
            <h2>What this project includes</h2>
            <p>This Laravel project includes routing, controllers, models, Blade views, MySQL integration, and CRUD operations for cars.</p>
            <p>It is designed as a mini website for a school assignment, while also practicing a more professional structure.</p>
        </article>
    </section>

    <section class="grid-3">
        <article class="card feature-card">
            <div class="feature-icon">🧩</div>
            <h3>MVC</h3>
            <p>I use the Model View Controller pattern to organize the application properly.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">🗄️</div>
            <h3>Database</h3>
            <p>Cars and contact messages can be stored and managed using MySQL.</p>
        </article>

        <article class="card feature-card">
            <div class="feature-icon">🎨</div>
            <h3>Interface</h3>
            <p>The user interface is customized with a modern layout, responsive cards, and clean visual styling.</p>
        </article>
    </section>
@endsection