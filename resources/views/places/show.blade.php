@extends('layouts.app')

@section('content')
   <div class="container-sm">
    <h3 style="margin-bottom: 20px">Place</h3>


        <div class="place-single">
            <div class="side-1">
                <img src="{{ asset('storage/' . $place->image_path) }}" alt="{{ $place->title }}" style="">
            </div>
            <div class="side-2 flex flex-col">
                <h3>{{ $place->title }}</h3>
                <p>{{ $place->description }}</p>
                <p>Posted by: {{ $place->user->name }}</p>
            </div>
            @if(Auth::user() && Auth::user()->is_admin)
                <form action="{{ route('places.destroy', $place->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">delete</button>
                </form>
            @endif
        </div>


   </div>
@endsection
