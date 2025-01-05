@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded-lg">
                <div class="card-header bg-gradient-primary text-white">
                    <h3 class="mb-0">Your Matches</h3>
                </div>
                <div class="card-body">
                    @if(isset($matches) && count($matches) > 0)
                        <div class="row">
                            @foreach($matches as $match)
                                <div class="col-md-6 mb-4">
                                    <div class="match-card hover-effect p-3 rounded-lg border">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $match->profile_photo ?? 'default-avatar.jpg' }}" 
                                                 class="rounded-circle mr-3" 
                                                 alt="Profile Photo"
                                                 style="width: 80px; height: 80px; object-fit: cover;">
                                            <div>
                                                <h5 class="mb-1">{{ $match->name }}</h5>
                                                <p class="text-muted mb-1">{{ $match->birth_date }} years old</p>
                                                <p class="mb-1"><i class="fas fa-map-marker-alt"></i> {{ $match->location }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted">{{ Str::limit($match->bio, 100) }}</p>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('matches.show', $match->id) }}" 
                                               class="btn btn-primary btn-sm">View Profile</a>
                                            <button class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-comment"></i> Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                            <h4>No matches found</h4>
                            <p class="text-muted">Keep searching, your perfect match is out there!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-effect {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-effect:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.bg-gradient-primary {
    background: linear-gradient(45deg, #2196F3, #1976D2);
}

.match-card {
    background: white;
    border: 1px solid #eee;
}
</style>
@endsection