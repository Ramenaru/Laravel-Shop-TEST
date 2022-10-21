<header class="bg-dark py-1">
    <div class="container px-4 px-lg-3 my-5">
        <div class="text-center text-white">
            <h4 class="display-6 fw-bolder">Checkout</h4>
        </div>
    </div>
</header>



<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <form action="{{route('postbuy',$detail_transaction->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row d-flex justify-content-center align-items-center  h-100">
        <div class="col-lg-10 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="h2 fw-bolder mb-3 mx-1 mx-md-4 mt-4">{{$detail_transaction->product->name}}</p>
                  <p class="fw-bold mb-4 mx-1 mx-md-4 mt-0 text-success">${{$detail_transaction->product->price}}.00</p>
                  <form class="mx-1 mx-md-4">
                    <p class="mx-1 mx-md-4 card-text"><i class="fa-solid fa-arrow-up-wide-short"></i> Quantity: {{$detail_transaction->qty}} Pieces</p>
                    <p class="mx-1 mx-md-4 card-text mb-4"><i class="fa-solid fa-hand-holding-dollar"></i> Total Price: ${{$detail_transaction->total_price}}.00</p>
                    <p class="mx-1 mx-md-4 card-text fw-bold">Upload Your Struct</p>
                    <input type="file" accept="image/*" required name="file" class="mx-1 mx-md-4 form-control mb-4">
                    <a href="{{route('cart')}}" class="mx-1 mx-md-4 btn btn-outline-primary mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success mb-4"><i class="fa-sharp fa-solid fa-money-check-dollar"></i> Buy and Upload</button>
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <div class="mx-5 col-9">
                        <img src="{{asset($detail_transaction->product->photo)}}"
                        class="img-fluid" alt="Sample image">
                    </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </section>