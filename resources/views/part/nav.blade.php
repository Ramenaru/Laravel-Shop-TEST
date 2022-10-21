        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#">
                    <img src="/img/favicon.ico" alt="" width="30" height="30">
                  </a>
                <a class="navbar-brand" href="#!">The Ra'</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{route('cart')}}">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('summary')}}">Summary</a></li>
                        @endauth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('login')}}">Login</a>
                              @auth
                              <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                              @endauth
                            </div>
                          </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-person-fill me-0"></i>
                            @auth
                            {{auth()->user()->name}}
                            @endauth
                        </button>
                    </form>
                </div>
            </div>
        </nav>