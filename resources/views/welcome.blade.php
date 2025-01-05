@extends('layouts.app')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 mb-4">Find Your Perfect Match</h1>
    <p class="lead mb-5">Join thousands of singles looking for meaningful connections</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card profile-card">
                <div class="card-body p-5">
                    <form action="{{ route('register') }}" method="GET">
                        <div class="mb-4">
                            <label class="form-label">I am a:</label>
                            <select name="gender" class="form-select">
                                <option value="male">Man</option>
                                <option value="female">Woman</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Looking for:</label>
                            <select name="seeking_gender" class="form-select">
                                <option value="male">Men</option>
                                <option value="female">Women</option>
                                <option value="both">Both</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 gradient-custom border-0">
                            Get Started
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
