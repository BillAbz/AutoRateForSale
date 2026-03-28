@extends('layouts.app')

@section('content')
    <section class="page-hero small-hero">
        <h1>Contact</h1>
        <p>You can leave a message using the form below.</p>
    </section>

    <section class="grid-2">
        <article class="card profile-card">
            <span class="showcase-label">Get in touch</span>
            <h2>Send a message</h2>
            <p>This contact page demonstrates form handling and validation in Laravel.</p>
            <p>You can enter your details and submit a message through the website.</p>
        </article>

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

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your email">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Write your message">{{ old('message') }}</textarea>

                <button type="submit" class="btn">Send Message</button>
            </form>
        </section>
    </section>
@endsection