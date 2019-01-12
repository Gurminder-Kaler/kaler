@extends('layouts.oneproduct')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {{--@foreach($abc as $product1)--}}
            {{--@if(equalTo($product1->product_id,$id))--}}
            <p>Product Name :{{$abc->product_name}}</p> <br>
            <p>Product Price: {{$abc->product_price}}</p> <br>
            <p>Product ID: {{$abc->product_id}}</p> <br>
            <p>Product Description : {{$abc->description}}</p> <br>
            {{--@endif--}}
                {{--@endforeach--}}
        </div>
        <div class="col-m-6">

        </div>
    </div>
</div>
    @endsection