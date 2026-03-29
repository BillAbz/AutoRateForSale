@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Edit Car</h1>
        <p>Update the selected car information.</p>
    </section>

    <section class="card form-card">
        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cars.update', $car->id) }}" method="POST" class="car-form">
            @csrf
            @method('PUT')

            <label for="name">Car Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $car->name) }}">

            <label for="type">Car Type</label>
            <input type="text" id="type" name="type" value="{{ old('type', $car->type) }}">

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="6">{{ old('description', $car->description) }}</textarea>

            <label>Rating</label>
            <select name="rating">
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ $car->rating == $i ? 'selected' : '' }}>
                        {{ str_repeat('⭐', $i) }}
                    </option>
                @endfor
            </select>

            <label for="image">Image URL</label>
            <input type="text" id="image" name="image" value="{{ old('image', $car->image) }}">

            <button type="submit" class="btn">Update Car</button>
        </form>
    </section>
@endsection