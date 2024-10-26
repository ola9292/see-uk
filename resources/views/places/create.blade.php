@extends('layouts.app')

@section('content')
<div class="container-lg">


    <h1 class="text-center">Create New Place</h1>
    <div class="form-container">
        <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Include CSRF token for security -->

            <!-- Event Name -->
            <div>
                <label for="place">Event Name:</label>
                <input type="text" id="" name="title" required>
            </div>


            <!-- Event Description -->
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image" class="form-control-file" required>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">Create Event</button>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
