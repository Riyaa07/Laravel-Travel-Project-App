<h1>Deleted Places</h1>

@foreach ($places as $place)
    Place ID: {{ $place->id }}<br>
    Place Name: {{ $place->place_name }}<br>
    Description: {{ $place->description }}<br>
    Category: {{ $place->category }}<br>
    Top Attractions: {{ $place->top_attractions }}<br>
    Things To Do: {{ $place->things_to_do }}<br>
    Days: {{ $place->days }}<br>
    <a href="{{ action('PlaceController@restore',
                        $place->id) }}">
        [restore]</a><br>
    <a href="{{ action('PlaceController@forceDelete',
                        $place->id) }}">
        [Force Delete]</a><br>
    <br>
@endforeach
