@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>About Me</h1>
        <p>A short introduction about who I am.</p>
    </section>

    <section class="card">
        <h2>{{ $name }}</h2>
        <p><strong>Study:</strong> {{ $study }}</p>
        <p><strong>Location:</strong> {{ $location }}</p>
        <p>{{ $bio }}</p>
    </section>

    <section class="grid-2">
        <article class="card">
            <h3>Why Laravel?</h3>
            <p>I chose Laravel because it is well structured and helps me understand the MVC pattern clearly.</p>
        </article>

        <article class="card">
            <h3>What I like</h3>
            <p>I enjoy creating websites, learning new frameworks, and exploring car-related topics.</p>
        </article>
    </section>
@endsection