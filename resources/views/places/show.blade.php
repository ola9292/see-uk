@extends('layouts.app')

@section('content')
   <div class="container-sm">
    <h3 style="margin-bottom: 20px">Place</h3>


        <div class="place-single">
            <div class="side-1">
                <img src="{{ asset('storage/' . $place->image_path) }}" alt="{{ $place->title }}" style="">
            </div>
            <div class="side-2">
                <h3>{{ $place->title }}</h3>
                <p>{{ $place->description }}</p>
            </div>
        </div>


   </div>
@endsection
