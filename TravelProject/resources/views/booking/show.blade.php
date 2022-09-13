@extends('master')

@section('content')
    <h1>All Bookings</h1>

    @foreach($bookings as $booking)
        Id: {{$booking->id}}<br>
        User Name: {{$booking->user_name}}<br>
        Contact Number: {{$booking->phn}}<br>
        Email: {{$booking->email}}<br>
        Travel Via: {{$booking->travel_via}}<br>
        How Many Days: {{$booking->days}}<br>
        How Many Persons: {{$booking->persons}}<br>
        Destination Place: {{$booking->place_id}}<br>
        From Date: {{$booking->from}}<br>
        To Date: {{$booking->to}}<br><br>
    @endforeach
@endsection

