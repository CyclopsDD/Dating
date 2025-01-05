@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card profile-card">
            <div class="card-body p-4">
                <h2 class="text-center mb-4">Edit Profile</h2>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="text-center">
                                @if($user->profile_photo)
                                    <img src="{{ Storage::url($user->profile_photo) }}" 
                                         class="rounded-circle img-fluid">
                                @else
                                    <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 150px; height: 150px;">
                                        <span class="display-4">{{ substr($user->name, 0, 1) }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" 
                                       value="{{ $user->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Profile Photo</label>
                                <input type="file" name="profile_photo" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bio</label>
                        <textarea name="bio" class="form-control" rows="4">{{ $user->bio }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" 
                               value="{{ $user->location }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Seeking</label>
                        <select name="seeking_gender" class="form-select">
                            <option value="male" {{ $user->seeking_gender == 'male' ? 'selected' : '' }}>Men</option>
                            <option value="female" {{ $user->seeking_gender == 'female' ? 'selected' : '' }}>Women</option>
                            <option value="both" {{ $user->seeking_gender == 'both' ? 'selected' : '' }}>Both</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 gradient-custom border-0">
                        Update Profile
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection