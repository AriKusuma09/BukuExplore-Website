<!doctype html>
<html lang="en">
  <head>
  	<title>Buku Explore | {{ $title }}</title>
	<link rel="icon" href="/assets/image/icon-logo/book-stack.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets/css/login-register.css">

	

	<style>
		.content-login-register {
			background: rgb(37, 37, 37, 0.8);
			padding-top: 55px;
			padding-bottom: 55px;
			border-radius: 15px;
		}
	</style>

	</head>
	<body class="img js-fullheight" style="background-image: url(/assets/image/login-register-img/1.jpg); ">


        @yield('login-register')


    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
	<script src="/assets/js/sweetalert2.all.min.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
	<script>
		// Success Register
		@if(session('success'))
			Swal.fire(
				'Success',
				'{{ session('success') }}',
				'success'
			)
		@endif

		// Failed Login
		@if(session('loginError'))
			Swal.fire(
				'Error',
				'{{ session('loginError') }}',
				'error'
			)
		@endif
	  </script>

    </body>
</html> 
      