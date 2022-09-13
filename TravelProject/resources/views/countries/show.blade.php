@extends('master')

@section('content')
    <h1>Country</h1>

    <div id="first"class="card text-bg-primary">
        <img src="https://media.cntraveler.com/photos/56cb8369b19e7d9b785203a5/master/w_2048,h_1536,c_limit/Beautiful-Canada-Stanley-Park.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">{{ $country->name }}</h5>
            <p class="card-text">ID: {{$country->id}}</p>
        </div>
    </div>

    {{--ID: {{$country->id}}<br>--}}
    {{--Name: {{ $country->name }}<br><br>--}}

    {{--<h2>Before for</h2>--}}
    @foreach ($country->places as $place)
        <h2 id="h2">Places:</h2>
        {{--    ID: {{ $place->id }}<br>--}}

        <div id="learn"class="card mb-3 bg-dark text-white" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @isset($place->file)
                        <img src="{{ asset('storage/' . $place->file) }}"
                             width="250px" height="260px"><br>
                    @endisset
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $place->place_name }}</h2>
                        <h6 class="card-subtitle mb-2 text-muted">{{$place->category}}</h6>
                        <p class="card-text"> {{$place->description}}</p>
                        <h6> Top Attractions: {{$place->top_attractions}}</h6>
                        <p>Things to do: {{$place->things_to_do}}</p>
                        <p class="card-text"><small class="text-muted">Days:- {{$place->days}}</small></p>
                    </div>
                </div>
            </div>
        </div>
        {{--    Place Name: {{ $place->place_name }}<br>--}}
        {{--    Category: {{$place->category}}<br>--}}
        {{--    Description: {{$place->description}}<br>--}}
        {{--    Top Attractions: {{$place->top_attractions}}<br>--}}
        {{--    Things to do: {{$place->things_to_do}}<br>--}}
        {{--    Days: {{$place->days}}<br>--}}
        {{--    @isset($place->file)--}}
        {{--        <img src="{{ asset('storage/' . $place->file) }}"--}}
        {{--             width="100px" height="100px"><br>--}}
        {{--    @endisset--}}

    @endforeach
@endsection

<style>
    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 25%;
    }

    #learn{
        margin-left: 30%;
    }

    #h2{
        text-align: center;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    #first{
        height: 400px;
        width:400px;
        margin-left: 45%;
        margin-top: 4%;
    }

    #first img{
        height: 400px;
        width:400px
    }
    #first h5{
        text-align: center;
        font-size: 60px;
        padding-top: 15%;
        color: black;
        background-color: white;
    }
    #first p{
        text-align: center;
        color: black;
        font-weight: bolder;
    }
</style>
