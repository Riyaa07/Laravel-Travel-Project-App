@extends('master')

@section('content')
    <h1>Your Bookings</h1>
    Id: {{$bookings->id}}<br>
    User Name: {{$bookings->user_name}}<br>
    Contact Number: {{$bookings->phn}}<br>
    Email: {{$bookings->email}}<br>
    Travel Via: {{$bookings->travel_via}}<br>
    How Many Days: {{$bookings->days}}<br>
    How Many Persons: {{$bookings->persons}}<br>
    Destination Place: {{$bookings->place_id}}<br>
    From Date: {{$bookings->from}}<br>
    To Date: {{$bookings->to}}<br><br>

@endsection
