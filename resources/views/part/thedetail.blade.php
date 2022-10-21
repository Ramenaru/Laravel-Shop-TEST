<header class="bg-dark py-1">
    <div class="container px-4 px-lg-3 my-5">
        <form action="{{route('postcart',$product->id)}}" method="post">
            @csrf
        <div class="text-center text-white">
            <h4 class="display-6 fw-bolder">Product Detail</h4>
        </div>
    </div>
</header>

<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <img class="card-img img-fluid" src="{{asset($product->photo)}}" alt="Card image cap" id="product-detail">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{$product->name}}</h1>
                        <p class="h3 py-2">${{$product->price}}.00</p>
                        <p class="py-2 text-warning">
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <span class="list-inline-item text-dark">Rating 5.0 | 60 Comments</span>
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Category:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$product->category->name}}</strong></p>
                            </li>
                        </ul>

                        <h6>Description:</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Product Color :</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$product->color}}</strong></p>
                            </li>
                        </ul>
                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Quantity :
                                            <input type="number" class="form-control mt-3" min="1" name="qty" id="product-quanity" value="1">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-outline-success btn-lg" name="submit" value="addtocard"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</section>