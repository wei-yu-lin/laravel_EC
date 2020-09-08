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
        @endforeach
        </div>
    </div>
</div>