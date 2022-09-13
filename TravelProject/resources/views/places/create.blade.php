@extends('master')

@section('content')
    <h1>Add New Place</h1>

    <form method="POST" action="{{ action('PlaceController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="place_name">Place Name:</label>
        <input name="place_name" type="text"><br><br>

        <label for="category">Category:</label>
        <input name="category" type="text"><br><br>

        <label for="description">Description:</label>
        <input name="description" type="text"><br><br>

        <label for="things_to_do">Things to do:</label>
        <input name="things_to_do" type="text"><br><br>

        <label for="top_attractions">Top Attractions:</label>
        <input name="top_attractions" type="text"><br><br>

        <label for="days">Days:</label>
        <input name="days" type="text"><br><br>

        <label for="country_id">Country</label>
        <select name="country_id">
            @foreach($countries as $id => $country)
                <option value="{{$id}}">{{$country}}</option>
            @endforeach
        </select><br><br>

        <label for="tags">Tags</label>
        <select multiple name="tags[]">
            @foreach($tags as $id => $tag)
                <option value="{{$id}}">{{$tag}}</option>
            @endforeach
        </select><br><br>

        <label for="file">File:</label>
        <input type="file" name="file" accept="image/*"><br><br>


        <input id="button" type="submit" value="Create"><br><br>
    </form>
    @include('partials.error')

@endsection
<style>
    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 30%;
    }

    form{
        background-color: aliceblue;
        border: 2px solid gray;
        margin-left: 25%;
        margin-top: 2%;
    }

    label{
        margin-left: 35%;
        /*padding-top: 4px;*/
        margin-top: 2%;
        font-size: 20px;
    }

    #button{
        margin-left: 45%;
    }
</style>

