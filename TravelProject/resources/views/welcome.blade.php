<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('countries') }}">Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('places') }}">Places</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign/Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('register') }}">Register</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Other
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('bookings/create') }}">Booking</a></li>
                            <li><a class="dropdown-item" href="{{ url('feedbacks/create') }}">Feedbacks</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="https://assets.kplus.com.tr/themes/travelerb2b/img/backgrounds/default-k.jpg"/>

    <h2>Top Destinations</h2>

    <div class="blog">
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://www.lifeinsuranceinternational.com/wp-content/uploads/sites/8/2020/12/shutterstock_739779886.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Singapore</h5>
                        <p class="card-text">Singapore is a sunny, tropical island in South-east Asia, off the southern tip of the Malay Peninsula. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://a.cdn-hotels.com/gdcs/production5/d1996/54fdb73f-eee5-4612-a3e7-6fc7ed2f7bee.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sydney, Australia</h5>
                        <p class="card-text">Sydney has grown into Australia's most diverse and cosmopolitan city with an exciting food, arts and entertainment scene</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://i.natgeofe.com/n/20d65599-d2e3-49e7-9641-a10b25aa8df2/toronto-travel.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toronto, Canada</h5>
                        <p class="card-text">Toronto is Canada's largest city and a world leader in such areas as business, finance, technology, entertainment and culture.</p>
                    </div>
                </div>
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://www.travelandleisure.com/thmb/Olylzl0cReD6hco2rg3GT-oGy0o=/1000x1000/smart/filters:no_upscale()/eiffel-tower-paris-france-EIFFEL0217-6ccc3553e98946f18c893018d5b42bde.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paris, France</h5>
                        <p class="card-text">Paris is one of the most beautiful cities in the world.It has a reputation of being a romantic and cultural city.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://skift.com/wp-content/uploads/2022/06/GettyImages-1208049833-scaled-e1654782364566-1024x682.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Agra, India</h5>
                        <p class="card-text">It is famous for its Mughal architecture and for being home to one of the Seven Wonders of the World, the Taj Mahal.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark text-white">
                    <img height="400px" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_864/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/skrc1voyybh8jvjvydp7/PragueNightWalkingTour.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Prague</h5>
                        <p class="card-text">Prague is famous for its cultural life and musical festival. Delicious european food and european vibes </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <div class="footer">
        @section('footer')
            &#169; SCC 2022 <br>
            Vishva & Riya
        @show
    </div>



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        img{
            height: 300px;
            width:100%;
        }

        h2{
            text-align: center;
            font-size: 40px;
            color: black;
            padding-top: 80px;
            font-family: "HP Simplified Hans";
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 10vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .footer{
            background-color: #1c1c1c;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
{{--<div class="flex-center position-ref full-height">--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}">Home</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}">Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--@endif--}}


</body>
</html>
