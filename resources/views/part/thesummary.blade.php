<header class="bg-dark py-1">
    <div class="container px-4 px-lg-3 my-5">
        <div class="text-center text-white">
            <h4 class="display-6 fw-bolder">Summary</h4>
        </div>
    </div>
</header>

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="col-3 mx-auto pb-2 text-center">
        @if (session()->has('insert'))
        <div class="alert mb-3 alert-success col-10 mx-auto pb-3 text-center">
          {{ session()->get('insert') }}
        </div>
        @endif
      </div>
        @foreach ($sum as $s)
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="{{asset($s->product->photo)}}"
                        class="img-fluid rounded-3" alt="Product Photos">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h4 class="lead fw-bold">{{$s->product->name}}</h4>
                      <p><span class="text-muted">Total Price: </span>${{$s->total_price}}.00
                        <p><span class="text-muted">Invoice: </span>{{$s->transaction->invoice}}
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h4 class="mb-2 mt-2">${{$s->product->price}}.00</h4>
                      <p class="text-muted">{{$s->qty}} Pieces</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @endforeach
</div>
</section>