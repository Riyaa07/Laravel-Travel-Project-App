<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Place;
use App\Country;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PlaceRequest;

class PlaceController extends Controller
{
    public function index()
    {
//        $places = DB::table('places')->get();
        $places = Place::paginate(4);
        return view('places.index', compact("places"));
    }

    public function show(Place $place)
    {
        return view('places.show', compact("place"));
    }

    public function create() {
        $countries = Country::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name','id');
        return view('places.create', compact("countries","tags"));
    }

    public function store(Request $request) {
        $country = Country::findOrFail($request->country_id);
        $place = new Place($request->all());
        $place->country()->associate($country)->save();
        $place->tags()->sync($request->tags);

        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('images', 'public');
            $place->file = $path;
            $place->save();
        }
        return redirect('places');
    }

    public function edit($place)
    {
        $place = Place::findOrFail($place);

        return view('places.edit', compact("place"));
    }
    public function update(PlaceRequest $request, $place)
    {
        $formData = $request->all();
        $place = Place::findOrFail($place);
        $place->update($formData);

        return redirect('places');
    }

    public function destroy(Place $place)
    {
        $place->country()->delete();
        $place->delete();
        return redirect('places');
    }

    public function showDeleted() {
        $places = Place::onlyTrashed()->get();
        return view('places.manage',compact("places"));
    }

    public function restore($place) {
        Place::withTrashed()->where('id', $place)->restore();
        Place::findOrFail($place)
            ->country()
            ->restore();

        return redirect('places');
    }

    public function forceDelete($place) {
        Place::onlyTrashed()->where('id', $place)->forceDelete();
        return redirect('places');
    }
}
