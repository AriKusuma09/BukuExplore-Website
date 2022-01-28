@extends('main.login-register')

@section('login-register')


<section class="ftco-section">
	<div class="container content-login-register">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Buku Explore</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-0">
					<h3 class="mb-4 text-center">Have an account?</h3>

					{{-- @if(session()->has('success'))
						<div class="alert alert-success-register alert-success alert-dismissible fade show" role="alert">
							<p><ion-icon name="checkmark-done-circle-outline"></ion-icon><b>{{ session('success') }}</b></p>
						</div>
					@endif --}}
					

					<form action="/login-page/login" method="POST" class="signin-form">
						@csrf
						<div class="form-group">
							<input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}">
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
						</div>
						<div class="form-group">
							<input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
							<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>

						<button type="submit" class="btn btn-warning btn-user btn-block submit" style="cursor: pointer;">
							Login
						</button>
						<div class="">
							<!-- <div class="w-50">
								<label class="checkbox-wrap checkbox-primary" style="color: #ffc107;">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div> -->
							<div class="text-right mt-md-2 mb-md-2">
								<a href="#" style=" color: #fff">Forgot Password?</a>
							</div>
						</div>
					</form>
					<p class="w-100 text-center">Belum Punya Akun? <a href="/register-page/register" style="color: #ffc107;">Daftar!</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection