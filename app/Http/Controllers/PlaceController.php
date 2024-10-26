<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('places.index',[
            'places' => $places,
        ]);
    }
    public function create()
    {
        return view('places.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Place::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
        ]);

        return redirect()->route('places.index');
    }
    public function show(Request $request, $id)
    {
        // dd($id);
        $place = Place::find($id);
        return view('places.show',[
            'place' => $place,
        ]);
    }
    public function like($id)
    {
        $place = Place::findOrFail($id);
        $like = $place->likes()->where('user_id', auth()->id())->first();

        if ($like) {
            $like->delete();
        } else {
            $place->likes()->create(['user_id' => auth()->id()]);
        }

        return back();
    }
}
