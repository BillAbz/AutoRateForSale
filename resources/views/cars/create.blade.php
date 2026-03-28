@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Add New Car</h1>
        <p>Fill in the form below to add a new car to the collection.</p>
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

        <form action="{{ route('cars.store') }}" method="POST" class="car-form">
            @csrf

            <label for="name">Car Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="For example BMW M4">

            <label for="type">Car Type</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" placeholder="For example Sports Coupe">

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="6" placeholder="Write a short description">{{ old('description') }}</textarea>

            <label for="image">Image URL</label>
            <input type="text" id="image" name="image" value="{{ old('image') }}" placeholder="https://example.com/car.jpg">

            <button type="submit" class="btn">Add Car</button>
        </form>
    </section>
@endsection