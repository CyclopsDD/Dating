@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $match->name }}</h1>
    <p>{{ $match->bio }}</p>
    <p>{{ $match->birth_date }} years old</p>
    <p><i class="fas fa-map-marker-alt"></i> {{ $match->location }}</p>
</div>
@endsection