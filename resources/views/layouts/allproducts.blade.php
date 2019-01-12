<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            background-color: #e9eef1;
            margin: 0px;
            padding: 0px;
        }

        @media (min-width: 1200px){
            .container {
                width: 1170px;
            }

        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-xs-12 {
            width: 100%;
        }

        .blog-grids {
            overflow: hidden;
            margin: 0 -15px;
        }

        .blog-grids .grid {
            background-color: #fff;
            width: calc(33.33% - 30px);
            float: left;
            padding: 15px;
            margin: 20px 15px 15px;
            border-radius: 10px;
            -webkit-box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .entry-media img {
            border-radius: 10px;
            width: 100%;
            max-height: 188px;
        }

        .entry-body {
            padding: 27px 10px;
        }

        .entry-body .cat {
            font-family: "Poppins", sans-serif;
            font-size: 12px;
            font-weight: 600;
            color: #6220d9;
            text-transform: uppercase;
        }

        .entry-body h3 {
            font-size: 21px;
            font-weight: 600;
            line-height: 1.30em;
            margin: 3px 0 0.73em;
        }

        .entry-body h3 a {
            color: #41516a;
        }

        .entry-body h3 a:hover {
            color: #6220d9;
            text-decoration: none;
        }

        .entry-body p {
            margin-bottom: 2em;
            color: #90949a;
            line-height: 1.8em;
        }

        .read-more-date {
            position: relative;
        }

        .read-more-date a {
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            font-size: 1.06667rem;
            font-weight: 600;
            color: #41516a;
            text-transform: uppercase;
        }

        .read-more-date .date {
            position: absolute;
            right: 0;
            color: #90949a;
        }

    </style>
    <title>Products:admin</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><p style="font-size: 45px;padding: 5px">KALAIR ENGINEERING CO.</p></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('home')}}">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    <li>@php($products1 = App\Product::all()->where("is_active","=",1))
                        @if(count($products1)> 0)
                            @foreach($products1 as $product)
                                <a href="{{route('hproduct',$product->id)}}">{{$product->product_name}}</a>
                            @endforeach
                        @else
                            <p>No products</p>
                        @endif

                    </li>
                </ul>
            </li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('contact')}}">Contact Us</a></li>
        </ul>
    </div>
</nav>
<br>
@yield('content')





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<!-- Latest compiled JavaScript -->

</body>
</html>