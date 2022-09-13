<h1>Edit Place Form</h1>
<form method="POST" action="
    {{ action('PlaceController@update', $place->id) }}">
    {{ method_field('PATCH') }}
    @include('partials.placeForm',
        ['buttonName' => 'Update',
         'place_name' => $place->place_name,
         'description' => $place->description,
         'category' => $place->category,
         'things_to_do' => $place->things_to_do,
         'top_attractions' => $place->top_attractions,
         'days' => $place->days,
         'file' => $place->file,
         'country_id' => $place->country_id
         ])
</form>
