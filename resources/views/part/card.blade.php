<div class="container mt-5 px-lg-5 px-4">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($data as $i)
            <div class="col-3 mb-5">
                <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$i->color}}</div>
                    <div class="card-body">
                        <img src="{{asset($i->photo)}}" alt="Product Photos" class="card-img-top" width="350px" height="250px">
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="card-title fw-bolder">{{$i->name}}</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <p class="card-text">${{$i->price}}.00</p>
                        </div>
                        <div class="text-center">
                            <a href="{{route('detail',$i->id)}}" class="btn btn-dark mt-3"><i class="fa-sharp fa-solid fa-circle-info"></i> View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>