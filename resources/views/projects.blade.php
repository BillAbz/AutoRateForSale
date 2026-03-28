@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Skills & Projects</h1>
        <p>Things I am learning while building this website.</p>
    </section>

    <section class="card">
        <h2>Current Learning Goals</h2>
        <ul class="styled-list">
            @foreach($projects as $project)
                <li>{{ $project }}</li>
            @endforeach
        </ul>
    </section>

    <section class="grid-2">
        <article class="card">
            <h3>MVC Structure</h3>
            <p>I use routes, a controller, and Blade views to organize the website properly.</p>
        </article>

        <article class="card">
            <h3>Frontend Styling</h3>
            <p>I also customize the colors, layout, buttons, and typography to make the website look personal.</p>
        </article>
    </section>
@endsection