@extends('master')

@section('content')

{{ csrf_field() }}
<label for="place_name">Name:</label>
<input name="place_name" type="text" value="{{ $place_name ?? '' }}"><br>
<label for="category">Category:</label>
<input name="category" type="text" value="{{ $category ?? '' }}"><br>
<label for="description">Description:</label>
<input name="description" type="text" value="{{ $description ?? '' }}"><br>
<label for="things_to_do">Things To Do:</label>
<input name="things_to_do" type="text" value="{{ $things_to_do ?? '' }}"><br>
<label for="top_attractions">Top Attractions:</label>
<input name="top_attractions" type="text" value="{{ $top_attractions ?? '' }}"><br>
<label for="days">Days:</label>
<input name="days" type="text" value="{{ $days ?? '' }}"><br>
<label for="country_id">Country Id:</label>
<input name="country_id" type="text" value="{{ $country_id ?? '' }}"><br>


<input type="submit" value="{{ $buttonName }}">
<br>

@include('partials.error')

@endsection

<style>
    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 10%;
    }

    form{
        background-color: aliceblue;
        border: 2px solid gray;

    }

    label{
        margin-left: 35%;
        /*padding-top: 4px;*/
        margin-top: 2%;
    }

    button{
        margin-left: 70%;
    }
</style>
