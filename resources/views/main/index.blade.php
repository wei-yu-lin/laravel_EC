@extends('layouts.master')
@section('商品列表', 'Page Title')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-6 col-md-4 round">
                <!-- <div class="img-thumbnail"> -->
                <div class="imgblock">
                    <img src="{{$product->imageurl}}" class="img-thumbnail img-responsive"></img>
                </div>
                <!-- </div> -->
                <h2>{{ $product->name }}</h2>
                <p>${{$product->price}}</p>
                <p>{{$product->description}}</p>
                <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product">
                <i class="fa fa-shopping-cart"></i>購買</a>
            </div>
                
                    <!-- <div class="thumbnail"> -->
                        <!-- <img src="{{$product->imageurl }}" class="img-responsive"> -->
                        <!-- <div class="caption"> -->
                            <!-- <h2>{{$product->name}}</h2> -->
                            <!-- <label>${{$product->price}}</label> -->
                        <!-- </div> -->
                        <!-- <p>{{$product->description}}</p> -->
                        <!-- <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span>購買</a></div> -->
                    <!-- </div> -->
                <!-- </div> -->
            @endforeach
            </div>
        </div>
    </div>
@endsection