@extends('master')

@section('content')
    <h1>All Countries</h1>

    @foreach($countries as $country)
        {{--                Id: {{$country->id}}<br>--}}
        {{--        <h1>{{$country->name}}</h1>--}}
        <br><br>

        <div class="display">
            <div id="bgimg" class="container-fluid py-5" style="background: url('https://wallpaperaccess.com/full/488392.jpg') no-repeat;background-size: contain;  ">
                <div class="py-5 text-white text-center">
                    <h2 id="name" class="display-5 fw-bold text-white">{{$country->name}}</h2>
                    <div class="col-lg-6 mx-auto">
                        <a  href="{{ url('countries/'.$country->id) }}" type="button" class="btn btn-outline-light btn-lg px-4">Learn More </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @parent
    {{ $countries->links() }}
@endsection

<style>
    h1{
        text-align: center;
        padding-top: 30px;
        font-size: 70px;
        margin-left: 30%;
    }

    #name{
        font-size: 60px;
        text-align: center;
    }

    .display{
        margin-left: 30%;
    }

    #bgimg{
        height:380px;
        width: 600px;
    }
</style>

