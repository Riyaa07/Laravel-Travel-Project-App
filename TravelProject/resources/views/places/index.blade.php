@extends('master')

@section('content')
    <h1>All Places</h1>

    @foreach($places as $place)
        {{--    Id: {{$place->id}}<br>--}}
        {{--    Place Name: {{$place->place_name}}<br>--}}
        {{--    Category: {{$place->category}}<br>--}}
        {{--    Description: {{$place->description}}<br><br>--}}

        <div  class="card bg-dark text-white" >
            <div id="place" class="card-body">
                <h5 class="card-title">{{$place->place_name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$place->category}}</h6>
                <p class="card-text">{{$place->description}}</p>
                <a href="{{ action('PlaceController@edit', $place->id) }}">[edit]</a>
                <form method="post" action="{{ action('PlaceController@destroy', $place->id) }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>

        {{--    <a href="{{ action('PlaceController@edit', $place->id) }}">[edit]</a><br>--}}
        {{--    <form method="post" action="{{ action('PlaceController@destroy', $place->id) }}">--}}
        {{--        {{ method_field('DELETE') }}--}}
        {{--        {{ csrf_field() }}--}}
        {{--        <input type="submit" value="Delete">--}}
        {{--    </form>--}}
        <br>
    @endforeach
    @parent
    {{ $places->links() }}
@endsection

<style>
    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 30%;
    }



    .card{
        margin-left: 25%;
    }
</style>

