@extends('master')

@section('content')
    <h1>All Places</h1>

    Id: {{$place->id}}<br>
    Place Name: {{$place->place_name}}<br>
    Category: {{$place->category}}<br>
    Description: {{$place->description}}<br>
    Top Attractions: {{$place->top_attractions}}<br>
    Things to do: {{$place->things_to_do}}<br>
    Days: {{$place->days}}<br>
    Country Id: {{ $place->country_id }}<br>
    Tags:
    @foreach($place->tags as $tag)
        {{ $tag->name }}
    @endforeach<br><br>


    @isset($place->file)
        <img src="{{ asset('storage/' . $place->file) }}"
             width="100px" height="100px"><br>
    @endisset

@endsection
