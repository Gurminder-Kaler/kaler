<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Home Page for Kalair Engineering Co.</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><p style="font-size: 45px;padding: 5px">KALAIR ENGINEERING CO.</p></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    <li>@php($products = App\Product::where("is_active","=",1)->get())
                        @if(count($products)> 0)
                            @foreach($products as $product)
                                <a href="{{route('hproduct',$product->id)}}">{{$product->product_name}}</a>
                            @endforeach
                        @endif</li>
                </ul>
            </li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('contact')}}">Contact Us</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Options
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    @if (Auth::check())
                        @if(Auth::user()->isAdmin())

                            <li><a href="{{url('/logout')}}"> Logout of {{Auth::user()->name}}</a></li>
                            <li><a href="{{url('admin')}}">GOTO Dashboard</a></li>
                        @else

                            <li><a href="{{url('/logout')}}"> Logout of {{Auth::user()->name}}</a></li>
                        @endif
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @endif
                </ul>
            </li>
            <li>
                @if(Auth::check())
               <p style="padding: 25px;background:#1f648b;color: #fff;font-size: 25px">Welcome, {{Auth::user()->name}}</p>
                    @endif
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="myCarousel" style="padding: -1px" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('image/ac1.jpg')}}" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{asset('image/ac2.jpg')}}" alt="Chicago" style="width:100%;">
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @yield('content')
        </div>


    </div>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>