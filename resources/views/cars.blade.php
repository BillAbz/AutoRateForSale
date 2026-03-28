@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>My Favorite Cars</h1>
        <p>Here you can see, add, edit, and manage my favorite cars.</p>
    </section>

    <div class="button-group">
        <a href="{{ route('cars.create') }}" class="btn">+ Add Car</a>
    </div>

    @if($cars->count())
        <section class="grid-3">
            @foreach($cars as $car)
                <article class="card car-card">
                    <div class="car-card-content">
                        @if(!empty($car->image))
                            <img src="{{ $car->image }}" alt="{{ $car->name }}" class="car-image">
                        @endif

                        <h2>{{ $car->name }}</h2>
                        <p><strong>Type:</strong> {{ $car->type }}</p>
                        <p>{{ $car->description }}</p>
                    </div>

                    <div class="actions">
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn action-btn">Edit</a>

                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="action-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary action-btn">Delete</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </section>
    @else
        <div class="empty-state">
            <p>No cars added yet.</p>
        </div>
    @endif
@endsection