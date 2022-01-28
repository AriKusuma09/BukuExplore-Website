@extends('main.login-register')


@section('login-register')


<section class="ftco-section">
	<div class="container content-login-register">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section" style="font-size: 30px;">Buku Explore</h2>
			</div>
		</div>
		<div class="row justify-content-center">
		<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-0">
					<h3 class="mb-4 text-center">Don't Have Account ?</h3>
					<form action="/register-page/register" method="POST" class="signin-form">
						@csrf
						<div class="form-group">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
							@error('name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
							@error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
							@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
							<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<button type="submit" class="btn btn-warning btn-user btn-block submit" style="cursor: pointer;">
							Register
						</button>
						<!-- <div class="form-group d-md-flex">
							<div class="w-50">
								<label class="checkbox-wrap checkbox-primary" style="color: #ffc107;">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>
						</div> -->
					</form>
					<p class="w-100 text-center mt-3">Sudah Mempunyai Akun? <a href="/login-page/login" style="color: #ffc107;">Masuk!</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection