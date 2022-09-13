@extends('master')

@section('content')
    <h1>Add New Country</h1>

    <form method="POST" action="{{action ('CountryController@store')}}">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input name="name" type="text"><br><br>
        <input id="button" type="submit" value="Submit"><br><br/>
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
