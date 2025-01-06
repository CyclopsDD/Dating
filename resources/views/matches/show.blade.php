@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{ $match->name }}</h1>
<p>{{ $match->bio ?? 'No bio available' }}</p>
@if($match->age())
    <p class="text-muted" aria-label="Age: {{ $match->age() }} years">
        {{ $match->age() }} years old
    </p>
@else
    <p class="text-muted">Age not specified</p>
@endif
<p>
    <i class="fas fa-map-marker-alt"></i> 
    {{ $match->location ?? 'Location not specified' }}
</p>
</div>
@endsection