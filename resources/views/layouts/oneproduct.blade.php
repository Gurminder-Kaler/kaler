<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    @foreach($products as $product)
                    <li><a href="{{route('products.one')}}">{{$product->name}}</a></li>
                    @endforeach
                    {{--<li><a href="{{route('admin.products.edit',$product->id)}}">Edit Product</a></li>--}}
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

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>