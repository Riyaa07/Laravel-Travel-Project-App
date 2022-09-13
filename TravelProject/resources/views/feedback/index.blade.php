@extends('master')

@section('content')
    <h1>Your Feedback Information</h1>
    {{--Id: {{$feedbacks->id}}<br>--}}
    {{--User Name: {{$feedbacks->u_name}}<br>--}}
    {{--Contact Number: {{$feedbacks->mobile}}<br>--}}
    {{--Email: {{$feedbacks->email_id}}<br>--}}
    {{--Travel Via: {{$feedbacks->feedback_info}}<br>--}}

    <div id="fb" class="card  bg-dark text-white" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">User Name: {{$feedbacks->u_name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Contact Number: {{$feedbacks->mobile}}</h6>
            <p class="card-text">Email: {{$feedbacks->feedback_info}}</p>
            <h6>Travel Via: {{$feedbacks->email_id}}</h6>
        </div>
    </div>
@endsection

<style>

    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 30%;
    }

    #fb{
        margin-left: 50%;
        margin-top: 3%;
    }
</style>
