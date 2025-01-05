@extends('layouts.app')

@section('title', 'Login')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <style>
        .centered-text {
            text-align: center;
        }

        .validation-error {
            color: red;
            margin-bottom: 1rem;
        }
    </style>
    <div class="card">
        <h2>Login</h2>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="validation-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p class="centered-text">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </p>
    </div>
@endsection