@extends('master')

@section('content')
    <h1>All Feedbacks from Users</h1>

    @foreach($feedbacks as $feedback)
        Id: {{$feedback->id}}<br>
        User Name: {{$feedback->u_name}}<br>
        Contact Number: {{$feedback->mobile}}<br>
        Email: {{$feedback->email_id}}<br>
        Feedback: {{$feedback->feedback_info}}<br>
    @endforeach
@endsection
