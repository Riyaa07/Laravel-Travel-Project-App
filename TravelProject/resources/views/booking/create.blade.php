@extends('master')

@section('content')
    <h1>Booking Detail</h1>

    <form method="POST" action="{{ action('BookingController@store') }}" >
        {{ csrf_field() }}
        <label for="user_name">User Name:</label>
        <input name="user_name" type="text"><br><br>

        <label for="phn">Phone Number:</label>
        <input name="phn" type="text"><br><br>

        <label for="email">Email Id:</label>
        <input name="email" type="email"><br><br>

        <label for="travel_via">Travel Via:</label>
        <select name="travel_via">
            <option value="bus">Bus</option>
            <option value="train">Train</option>
            <option value="car">Rental Car</option>
            <option value="flight">Flight</option>
        </select><br><br>

        <label for="days">How Many Days:</label>
        <input name="days" type="number"><br><br>

        <label for="persons">How Many Persons:</label>
        <input name="persons" type="number"><br><br>

        <label for="place_id">Destination Place:</label>
        <select name="place_id">
            @foreach($places as $id => $place)
                <option value="{{$id}}">{{$place}}</option>
            @endforeach
        </select><br><br>

        <label for="from">From Date:</label>
        <input name="from" type="date"><br><br>

        <label for="to">To Date:</label>
        <input name="to" type="date"><br><br>

        <input id="button" type="submit" value="Submit Booking"><br><br>
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
    }

    label{
        margin-left: 35%;
        /*padding-top: 4px;*/
        margin-top: 2%;
    }

    #button{
        margin-left: 45%;
    }
</style>
