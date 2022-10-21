<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ra' | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
        <!-- Bootstrap icons-->
		<link rel="stylesheet" href="/fs/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/login.css" rel="stylesheet" />
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>

<body class="my-login-page">

    @include('part.nav')

    <header class="bg-dark py-1">
        <div class="container px-4 px-lg-3 my-5">
            <div class="text-center text-white">
                <h4 class="display-6 fw-bolder">Register Page</h4>
            </div>
        </div>
    </header>

<section class="h-100">
		<div class="container h-100 mb-5">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/favicon.ico" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							@if (session()->has('fail'))
							<div class="alert mb-3 alert-danger">
								{{ session()->get('fail') }}
							</div>
							@endif
							<form method="POST" action="{{route('postregister')}}" class="my-login-validation" novalidate="">
								@csrf
								<div class="form-group mt-3 mb-3">
									<label for="name">Username</label>
									<input id="email" type="name" class="form-control" name="name" value="" required autofocus>
								</div>
								<div class="form-group mt-3 mb-3">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								</div>

								<div class="form-group mt-3 mb-3">
									<label for="password">Password
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Submit
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{route('login')}}">Back to Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
        @include('part.footer')
	</section>




	<!-- Bootstrap core JS-->
	{{-- <script src="/fs/js/all.js"></script> --}}
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
