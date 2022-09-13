@extends('master')

@section('content')
    <h1>Add Your Feedback</h1>

    <form method="POST" action="{{ action('FeedbackController@store') }}" >
        {{ csrf_field() }}
        <label for="u_name">User Name:</label>
        <input name="u_name" type="text"><br><br>

        <label for="mobile">Phone Number:</label>
        <input name="mobile" type="text"><br><br>

        <label for="email_id">Email Id:</label>
        <input name="email_id" type="text"><br><br>

        <label for="feedback_info">Feedback:</label>
        <textarea name="feedback_info" type="text">Please enter your feedback here!!!</textarea><br><br>

        <input id="button" type="submit" value="Feedback"><br><br>

    </form>
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

