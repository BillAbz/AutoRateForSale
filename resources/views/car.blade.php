@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>My Favorite Cars</h1>
        <p>Some cars that inspire me because of their design and performance.</p>
    </section>

    <section class="grid-3">
        @foreach($cars as $car)
            <article class="card">
                <h2>{{ $car['name'] }}</h2>
                <p><strong>Type:</strong> {{ $car['type'] }}</p>
                <p>{{ $car['description'] }}</p>
            </article>
        @endforeach
    </section>
@endsection