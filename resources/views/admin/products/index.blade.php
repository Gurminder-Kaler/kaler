@extends('layouts.product')
@section('content')

    <h1>Products Index</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Id</th>
                          <th scope="col">Product-Id</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Description</th>
                          <th scope="col">Status</th>
                          <th scope="col">Created_at</th>
                          <th scope="col">Updated_at</th>
                        </tr>
                      </thead>
                      <tbody>

                            @if(count($products)>0)
                                @foreach($products as $product)
                                    <tr>
                          <td> <a href="{{route('admin.products.edit',$product->id)}}">(Edit)/(Delete) </a></td>
                          <td>{{$product->id}}</td>
                          <td>{{$product->product_id}}</td>
                          <td>{{$product->product_name}}</td>
                          <td>{{$product->product_price}}</td>
                          <td>{{str_limit($product->description,22)}}</td>
                          <td>{{$product->is_active}}</td>
                          <td>{{$product->created_at}}</td>
                          <td>{{$product->updated_at}}</td>
                                    </tr>
                                @endforeach

                                @endif


                      </tbody>
                    </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @include('includes.error')
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



@endsection