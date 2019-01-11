<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Dashboard: Admin</title>
    @yield('styles')
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><p style="font-size: 45px;padding: 5px">KALAIR ENGINEERING CO.</p></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('home')}}"> Admin Home</a></li>
            <li><a href="{{url('/')}}">Non Admin Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.users.index')}}">View/Edit Users</a></li>
                    <li><a href="{{route('admin.users.create')}}">Create User</a></li>
                    {{--<li><a href="{{route('admin.users.edit')}}">Edit User</a></li>--}}
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.products.index')}}">View/Edit Products</a></li>
                    <li><a href="{{route('admin.products.create')}}">Create Product</a></li>
                    {{--<li><a href="#">Edit Product</a></li>--}}
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.media.index')}}">View Media</a></li>
                    <li><a href="{{route('admin.media.create')}}">Upload Media</a></li>
                    {{--<li><a href="#">Edit Product</a></li>--}}
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Pages
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                    {{--<li><a href="#">Edit Product</a></li>--}}
                </ul>
            </li>
            <li><a href="{{url('/logout')}}">Logout From admin</a></li>

        </ul>
    </div>
</nav>
<br>
@yield('content')


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        @yield('scripts');
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>