@extends('layouts.app')

@section('content')
   <div class="container-sm">
    <h3 style="margin-bottom: 20px">UK's beautiful places</h3>
    <div class="flex flex-col">
        @foreach ($places as $place)
            <a href="{{ route('places.show', $place->id) }}">
                <div class="shadow-box place">
                    <div class="side-1">
                        <img src="{{ asset('storage/' . $place->image_path) }}" alt="{{ $place->title }}" style="">
                    </div>
                    <div class="side-2 flex flex-col">
                        <h3 class="capitalize">{{ $place->title }}</h3>
                        <p>{{ strlen($place->description) > 100 ? substr($place->description,0,100) . "..." :  $place->description}}</p>
                        <p>Posted by: {{ $place->user->name }}</p>
                        <form action="{{ route('places.like', $place->id) }}" method="POST">
                            @csrf
                            <button type="submit">
                                {{ $place->likes->count() }} {{ $place->likes->count() === 1 ? 'Like' : 'Likes' }}
                            </button>
                        </form>
                    </div>
                </div>
            </a>
            @endforeach
    </div>

   </div>
@endsection
