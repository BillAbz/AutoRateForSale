@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Contact</h1>
        <p>You can leave a message using the form below.</p>
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

        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6">{{ old('message') }}</textarea>

            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
@endsection